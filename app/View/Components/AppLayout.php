<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        view()->share('dark_mode', session()->has('dark_mode') ? filter_var(session('dark_mode'), FILTER_VALIDATE_BOOLEAN) : false);
        view()->share('side_menu', $this->sideMenu());
        $pageName = request()->route()->getName();
        $activeMenu = $this->activeMenu($pageName);
        view()->share('first_level_active_index', $activeMenu['first_level_active_index']);
        view()->share('second_level_active_index', $activeMenu['second_level_active_index']);
        view()->share('third_level_active_index', $activeMenu['third_level_active_index']);

        return view('layouts.app');
    }

    public function sideMenu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'admin.dashboard',
            ],
            'home' => [
                'icon' => 'shopping-bag',
                'title' => 'Home',
                'route_name' => 'admin.static.home',
            ],
            'aboutUs' => [
                'icon' => 'tag',
                'title' => 'About Us',
                'route_name' => 'admin.static.aboutUs',
            ],
            'contactUs' => [
                'icon' => 'share-2',
                'title' => 'Contact Us',
                'route_name' => 'admin.static.contactUs',
            ],
            'project' => [
                'icon' => 'folder-plus',
                'title' => 'Projects',
                'route_name' => 'admin.projects.index',
            ],
            'service' => [
                'icon' => 'globe',
                'title' => 'Services',
                'route_name' => 'admin.services.index',
            ],
            'user' => [
                'icon' => 'user',
                'title' => 'Users',
                'route_name' => 'admin.user.index',
            ],
            'role' => [
                'icon' => 'settings',
                'title' => 'Roles',
                'route_name' => 'admin.role.index',
            ],
        ];
    }

    /**
     * Determine active menu & submenu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activeMenu($pageName)
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach ($this->sideMenu() as $menuKey => $menu) {
            if ($menu !== 'devider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (isset($menu['sub_menu']) ?? $menu['sub_menu'] = []) {

                foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {

                    if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                    }

                    if (isset($subMenu['sub_menu'])) {

                        foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {

                            if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                $firstLevelActiveIndex = $menuKey;
                                $secondLevelActiveIndex = $subMenuKey;
                                $thirdLevelActiveIndex = $lastSubMenuKey;
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex
        ];
    }
}
