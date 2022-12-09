<template>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="../../../public/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../../../public/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <template v-for="(menu_item, index) in menu_items" :key="'menu_item' + index">
                        <li class="nav-item " v-if="menu_item.childs_items" :class="{
                                'menu-open':
                                    menu_item.menu_active.includes(
                                        currentRoute
                                    ),
                            }">
                            <a href="#" class="nav-link" :class="{
                                    active: menu_item.menu_active.includes(
                                        currentRoute
                                    ),
                                }">
                                <i class="nav-icon fas fa-solid" :class="[menu_item.font]"></i>
                                <p>
                                    {{ menu_item.name }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ml-2" v-for="(
                                        childs_item, child_index
                                    ) in menu_item.childs_items" :key="'child' + child_index">
                                    <Link class="nav-link" :href="route(childs_item.route_name)" :class="{
                                            active: childs_item.menu_active.includes(
                                                currentRoute
                                            ),
                                        }">
                                    <i class="nav-icon fas" :class="childs_item.font"></i>
                                    <p>{{ childs_item.name }}</p>
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" v-else>
                            <Link :href="route(menu_item.route_name)" class="nav-link" :class="{
                                    active: menu_item.menu_active.includes(
                                        currentRoute
                                    ),
                                }">
                            <i class="nav-icon fas" :class="menu_item.font"></i>
                            <p>{{ menu_item.name }}</p>
                            </Link>
                        </li>
                    </template>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>

<script>
    import {
        Link
    } from "@inertiajs/inertia-vue3";
    export default {
        components: {
            Link
        },
        data() {
            return {
                menu_items: [
                    {
                        name: "Түстер",
                        font: "fa-cogs",
                        route_name: "admin.colors.index",
                        menu_active: ["admin.colors"],
                    },
                    {
                        name: "Түрлер",
                        font: "fa-list",
                        route_name: "admin.types.index",
                        menu_active: ["admin.types"],
                    },
                    {
                        name: "Өндірістік орын",
                        font: "fa-list",
                        route_name: "admin.facturers.index",
                        menu_active: ["admin.facturers"],
                    },
                    {
                        name: "Форма түрі",
                        font: "fa-list",
                        route_name: "admin.forms.index",
                        menu_active: ["admin.forms"],
                    },
                    {
                        name: "Киімдер",
                        font: "fa-list",
                        route_name: "admin.odezhdalar.index",
                        menu_active: ["admin.odezhdalar"],
                    },


                ],
            }
        },
        mounted() {
            $('[data-widget="treeview"]').each(function() {
                adminlte.Treeview._jQueryInterface.call($(this), "init");
            });
        },
        computed: {
            currentRoute() {
                let currentRoute = route().current().split(".");
                currentRoute.pop();
                return currentRoute.join(".");
            },
        },
    }

</script>


<style scoped>

</style>
