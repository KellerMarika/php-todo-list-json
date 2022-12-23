const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      a:"totò",
      //recupero con axios da api/readTasks
      tasks:[],
      //creo nuovo task con form
      newTask: {
        text: "",
        done: "",
      },
    }
  },
  methods: {
    fetchTasksList() {
      axios.get("api/readTasks.php")
        .then((resp) => {
          this.tasks = resp.data;
         /*  console.log(this.tasks); */
          console.log("ambacabanane");
        });
    },
    f(){
      console.log("notte e bistecca");
    }
  },
  mounted(){
    this.f();
    this.fetchTasksList();
  },
}).mount("#app");