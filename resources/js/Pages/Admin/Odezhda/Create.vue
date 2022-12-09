<template>

    <head>
        <title>Админ панель | Киім қосу</title>
    </head>
    <AdminLayout>
        <template #breadcrumbs>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Киім қосу</h1>
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
                            <a :href="route('admin.forms.index')">
                                <i class="fas fa-dashboard"></i>
                                Киімдер тізімі
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Киім қосу</li>
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
                            <input type="text" class="form-control" v-model="form.name" name="name" placeholder="Аты" />
                            <validation-error :field="'name'" />
                        </div>
                        <div class="form-group">
                            <label for="">Киім түрі</label>
                            <select class="form-control" v-model="form.type_id" name="news_types_id" required>
                                <option :value="null" hidden>Киім түрін таңдаңыз</option>
                                <option :value="type.id" v-for="type in types" :key="'type' + type.id">
                                    {{ type.name }}
                                </option>
                            </select>
                            <validation-error :field="'type_id'" />
                        </div>
                        <div class="form-group">
                            <label for="">Сипаттама</label>
                            <input type="text" class="form-control" v-model="form.description" name="name" placeholder="Сипаттама" />
                            <validation-error :field="'description'" />
                        </div>
                        <div class="form-group">
                            <label for="">Бренд</label>
                            <input type="text" class="form-control" v-model="form.brand" name="name" placeholder="Бренд" />
                            <validation-error :field="'brand'" />
                        </div>
                        <div class="form-group">
                            <label for="">Өндіріс</label>
                            <select class="form-control" v-model="form.facturer_id" name="news_types_id" required>
                                <option :value="null" hidden>Өндіріс таңдаңыз</option>
                                <option :value="facturer.id" v-for="facturer in facturers" :key="'facturer' + facturer.id">
                                    {{ facturer.name }}
                                </option>
                            </select>
                            <validation-error :field="'facturer_id'" />
                        </div>
                        <div class="form-group">
                            <label for="">Түсі</label>
                            <select class="form-control" v-model="form.color_id" name="color_id" required>
                                <option :value="null" hidden>Түсін таңдаңыз</option>
                                <option :value="color.id" v-for="color in colors" :key="'color' + color.id">
                                    {{ color.name }}
                                </option>
                            </select>
                            <validation-error :field="'color_id'" />
                        </div>
                        <div class="form-group">
                            <label for="">Саны</label>
                            <input type="text" class="form-control" v-model="form.value" name="name" placeholder="Саны" />
                            <validation-error :field="'value'" />
                        </div>
                        <div class="form-group">
                            <label for="">Өлшем</label>
                            <select class="form-control" v-model="form.form_type_id" name="color_id" required>
                                <option :value="null" hidden>Өлшемін таңдаңыз</option>
                                <option :value="form.id" v-for="form in forms" :key="'form' + form.id">
                                    {{ form.name }}
                                </option>
                            </select>
                            <validation-error :field="'form_type_id'" />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="">Жамбас өлшемі</label>
                                <input type="text" class="form-control" v-model="form.size_info.zhambas" name="name" placeholder="80 см" />
                                <validation-error :field="'size_info.zhambas'" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Бел өлшемі</label>
                                <input type="text" class="form-control" v-model="form.size_info.bel" name="name" placeholder="80 см" />
                                <validation-error :field="'size_info.bel'" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Кеуде өлшемі</label>
                                <input type="text" class="form-control" v-model="form.size_info.keude" name="name" placeholder="80 см" />
                                <validation-error :field="'size_info.keude'" />
                            </div>
                        </div>
                        <div class="form-group file-upload">
                            <label for="">Сурет</label>
                            <div class="ml-2">
                                <div class="ml-2">
                                    <label for="Ru">Сурет енгізіңіз</label>
                                    <br>
                                    <img v-if="form.image && !image.file" :src="route('index')  +'/storage/images/news/' +  form.image" height="300" alt="image" style="padding-bottom: 10px" />
                                    <img v-show="image.preview" :src="image.preview" height="300" style="padding-bottom: 10px" />
                                    <div class="file-input" style="margin-right: 10px">
                                        <input type="file" hidden name="image" @change="handleImageUpload()" ref="image" accept="image/jpeg,image/png" class="file" id="image" />
                                        <label for="image"> Загрузить </label>
                                    </div>
                                </div>
                            </div>

                            <validation-error :field="'image'" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Бағасы</label>
                            <input type="number" class="form-control" v-model="form.price" name="name" placeholder="3000" />
                            <validation-error :field="'price'" />
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
    import {
        Link,
        Head
    } from "@inertiajs/inertia-vue3";
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
                form: {
                    name: null,
                    type_id: null,
                    description: null,
                    brand: null,
                    facturer_id: null,
                    color_id: null,
                    value: null,
                    form_type_id: null,
                    size_info: {
                        zhambas: null,
                        bel: null,
                        keude: null,
                    },
                    image: null,
                    price: 0,
                },
                image: {
                    file: "",
                    preview: "",
                },
            }
        },
        props: ['colors', 'facturers', 'forms', 'types'],
        methods: {
            submit() {
                if(this.image.file ) this.form.image = this.image.file
                this.$inertia.post(
                    route("admin.odezhdalar.store"),
                    this.form, {
                        onError: () => console.log("An error has occurred"),
                        onSuccess: () =>
                            console.log("The new contact has been saved"),
                    }
                );
            },
            handleImageUpload() {
                this.image.file = this.$refs.image.files[0];
                if (this.image.file) {
                    const reader = new FileReader();
                    reader.onloadend = (file) => {
                        this.image.preview = reader.result;
                    };
                    reader.readAsDataURL(this.image.file);
                    this.$refs.image.value = "";
                } else {
                    this.news.image = "";
                    this.image.file = "";
                    this.image.preview = "";
                }
            },
        },
    };

</script>

<style>
    .file-upload .file-input label {
        width: 158px;
        height: 40px;
        border-radius: 5px;
        border-color: #ddd;
        background: #eee;
        box-shadow: 0 3px 4px rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #555;
        cursor: pointer;
        transition: transform 0.2s ease-out;
    }

</style>
