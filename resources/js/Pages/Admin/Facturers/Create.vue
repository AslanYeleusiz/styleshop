<template>
   <head>
        <title>Админ панель | Өндірістік орын қосу</title>
    </head>
    <AdminLayout>
        <template #breadcrumbs>
              <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Өндірістік орын қосу</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a :href="route('admin.index')">
                                <i class="fas fa-dashboard"></i>
                                Басты бет
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a :href="route('admin.facturers.index')">
                                <i class="fas fa-dashboard"></i>
                                Өндірістік орын тізімі
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Өндірістік орын     қосу</li>
                    </ol>
                </div>
            </div>
        </template>
        <div class="container-fluid">
            <div class="card card-primary">
                <form method="post" @submit.prevent="submit">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Аты</label>
                            <input
                                type="text"
                                class="form-control"
                                v-model="facturer.name"
                                name="name"
                                placeholder="Аты"
                            />
                            <validation-error :field="'name'" />
                        </div>
                        <div class="form-group">
                            <label for="">Қала</label>
                            <input
                                type="text"
                                class="form-control"
                                v-model="facturer.city"
                                name="name"
                                placeholder="Қала"
                            />
                            <validation-error :field="'city'" />
                        </div>
                        <div class="form-group">
                            <label for="">Мекен-жай</label>
                            <input
                                type="text"
                                class="form-control"
                                v-model="facturer.address"
                                name="name"
                                placeholder="Мекен-жай"
                            />
                            <validation-error :field="'address'" />
                        </div>
                        <div class="form-group">
                            <label for="">Ұялы телефон</label>
                            <input
                                type="text"
                                class="form-control"
                                v-model="facturer.phone"
                                name="name"
                                placeholder="Ұялы телефон"
                            />
                            <validation-error :field="'phone'" />
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-1">
                            Сақтау
                        </button>
                        <button type="button" class="btn btn-danger" @click.prevent="back()">
                            Артқа
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>
<script>
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";
import Pagination from "../../../Components/Pagination.vue";
import ValidationError from "../../../Components/ValidationError.vue";

export default {
    components: {
        AdminLayout,
        Link,
        Pagination,
        ValidationError,
        Head
    },
    data() {
        return {
            facturer: {
                name: null,
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(
                route("admin.facturers.store"),
                this.facturer,
                {
                    onError: () => console.log("An error has occurred"),
                    onSuccess: () =>
                        console.log("The new contact has been saved"),
                }
            );
        },
    },
};
</script>
