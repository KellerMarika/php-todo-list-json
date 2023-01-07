const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      //recupero con axios da api/readTasks
      tasks: [],
      //creo nuovo task con form
      newTask: {
        text: "",
        done: false,
        esempio: "none",
      },


    }
  },
  methods: {

    /* READ LIST */
    fetchTasksList() {
      axios.get("api/readTasks.php")
        .then((resp) => {
          this.tasks = resp.data;
          console.log(this.tasks);
        });
    },

    /* CREATE NEW TASK */
    createNewTask() {
      axios.post("api/createTask.php", this.newTask, {
        headers: { "Content-Type": "multipart/form-data" }
      }).then((resp) => {
        //se non riscarico i dati ogni volta non ho la certezza che alri utenti non abbiano inserito altri dati
        this.fetchTasksList();
        this.newTask.text = null;
      });
    },
  },
  mounted() {
    this.fetchTasksList();
  },
}).mount("#app");