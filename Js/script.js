

// we recall Vue:
const {createApp} = Vue;

createApp({
    data(){
        return {
            starShip:[],
            componentText: '',
            apiUrl: 'server.php'
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
            const newComponent = {
                id: null,
                text: this.componentText,
                done: false
            }
            let nextId = 0;
            this.starShip.forEach((el) => {
                if(nextId < el.id) {
                    nextId = el.id;
                }
            });
            newComponent.id = nextId + 1;
            this.starShip.push(newComponent);
            this.componentText = '';
           // console.log(this.starShip);
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