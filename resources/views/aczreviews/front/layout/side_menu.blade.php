<?php 
use App\Models\aczreviews\Department;
use App\Models\aczreviews\Section;
?>
    <div id="nav-close-btn" onclick="closeNav()">&times;</div>
    <div id="side-nav" class="side-nav">
        <div class="side-nav-header">
            <i class="fas fa-user-circle"></i><span>Đăng nhập</span>
        </div>
        <?php 
            $departments = Department::with(['sections'=>function($query){
                $query->with('categories')->get()->toArray();
            }])->get()->toArray();
        ?>
        <div id="side-nav-main-container">
            @foreach($departments as $department)
            <div class="side-nav-list-header">
                <h5>{{$department['department_name']}}</h5>
            </div>
            <ul class="side-nav-list" data-side-nav-department-id = "{{$department['id']}}" @if(count($department['sections']) < 4) style = "height:auto" @endif>
                @foreach($department['sections'] as $section)
                <li class="side-nav-list-item" data-side-nav-section-id = "{{$section['id']}}">
                    <a href="javascript:void(0);" >
                    <span>{{$section['section_name']}}</span>
                    </a>
                    <i class="fas fa-chevron-right"></i>
                </li>
                @endforeach
            </ul>
            @if(count($department['sections']) >4)
            <div class="side-nav-list-see-more" data-side-nav-department-id = "{{$department['id']}}">
                <div>Xem thêm</div>
                <i class="fas fa-chevron-down" style = "margin-left: 6px"></i>
            </div>
            @endif
            <hr>
            @endforeach
        </div>
        <?php 
            $sections = Section::with('categories')->get()->toArray();
        ?>
        @foreach($sections as $section_for_sub_menu)
        <div class="side-nav-sub-container" data-sub-menu-id = "{{$section_for_sub_menu['id']}}">
            <div class="main-menu-back" data-nav-section-id = "{{$section_for_sub_menu['id']}}">
                <i class="fa-solid fa-arrow-left" style = "margin-right: 6px"></i>
                MENU CHÍNH
            </div>
            <hr>
            <div class="side-nav-sub-menu">
                <div class="side-nav-sub-list-header">
                    <h5>{{$section_for_sub_menu['section_name']}}</h5>
                </div>
                <ul class = "side-nav-sub-list">
                    @foreach($section_for_sub_menu['categories'] as $category)
                    <li class = "side-nav-sub-list-item"><a href="{{url($category['url'])}}">{{$category['category_name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
