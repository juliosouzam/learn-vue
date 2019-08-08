<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue - Class 19</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>
    <div id="app">
        @include('projects.list')

        <section class="section">
            <div class="container">
                <form action="/projects" method="post" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
                    <fieldset>
                        <div class="field">
                            <label class="label">Project Name</label>
                            <div class="control">
                                <input class="input" type="text" name="name" v-model="name" placeholder="Name of project">

                                <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
                            </div>
                        </div>
                                
                        <div class="field">
                            <label class="label">Project Description</label>
                            <div class="control">
                                <input class="input" type="text" name="description" v-model="description" placeholder="Description project">

                                <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
                            </div>
                        </div>
        
                        <div class="field">
                            <div class="control">
                                <button class="button is-success" :disabled="errors.any()">
                                    Create
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>