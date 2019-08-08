Vue.component('tabs', {
    template: `
        <div>
            <div class="tabs is-centered">
                <ul>
                    <li v-for="(tab, idx) in tabs" :key="idx" :class="{ 'is-active': tab.isActive }">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                    </li>
                </ul>
            </div>

            <div class="tabs-details">
                <slot></slot>
            </div>
        </div>
    `,
    data() {
        return {
            tabs: []
        }
    },
    created() {
        this.tabs = this.$children;
    },
    methods: {
        selectTab(seelctedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.name == seelctedTab.name);
            });
        }
    },
});

Vue.component('tab', {
    props: {
        name: { required: true },
        selected: { default: false }
    },
    data() {
        return {
            isActive: false
        }
    },
    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    },
    mounted() {
        this.isActive = this.selected;
    },
    template: `
        <div v-show="isActive"><slot></slot></div>
    `
})


new Vue({
    el: '#root',
})