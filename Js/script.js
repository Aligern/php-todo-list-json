

// we recall Vue:
const {createApp} = Vue;

createApp({
    data(){
        return {
            starShip:[],
            componentText: '',
            apiUrl: 'server.php',
            lastId: 5
        }
    },
    methods: {
        toggleDone(id) {
            const newItem = this.starShip.find((el) => {
                return el.id === id;
            })
           // console.log(newItem);
            if (newItem) {
                newItem.done = !newItem.done;
            }
        },
        removeItem(id) {
            const i = this.starShip.findIndex((el) => el.id === id);
            if (i !== -1) {
                this.starShip.splice(i,1);
            }
        },
        addComponent() {
            const component = {...this.newComponent};
            const newComponent = {
                id: "",
                text: "",
                done: ""
            };
            this.lastId += 1;
            component.id = this.lastId;
            this.starShip.push(component);
            axios.post(this.apiUrl, data).then((res) => {
                console.log(res.data);
            })
        },
        getData(){
            axios.get(this.apiUrl).then((res) => {
                //this.starShip = res.data;
                console.log(res.data);
                this.starShip = res.data;
            });
        }
    },
    created() {
        this.getData();
    },
}).mount('#app');