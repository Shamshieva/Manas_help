@extends('layout.admin')
@section('content')

    <div>
        <li class="sidebar-layout">
            <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                <i>
                    <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                    </svg>
                </i>
                <span class="ml-2">Category name</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">

                <li class=" sidebar-layout">
                    <a href="../backend/ui-embed-video.html" class="svg-icon">
                        <i class="">
                            <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i><span class="">Subcategory name</span>
                    </a>
                </li>
            </ul>
        </li>
    </div>


@endsection
