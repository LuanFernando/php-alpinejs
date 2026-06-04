export default function users() {
  return {
    placeholderUser: "Enter Username..",
    placeholderPassword: "Enter Password",
    username: "Grilo",
    password: "******",
    listUsers: [],
    getUsers() {
      fetch("https://jsonplaceholder.typicode.com/users")
        .then((response) => response.json())
        .then((json) => {
          console.log(json);
          this.listUsers = json;
        });
    },
  };
}
