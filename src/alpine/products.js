export default function products() {
  return {
    listProducts: [],
    getProducts() {
      fetch("../api/products.php")
        .then((response) => response.json())
        .then((json) => {
          console.log(json);
          this.listProducts = json;
        });
    },
  };
}
