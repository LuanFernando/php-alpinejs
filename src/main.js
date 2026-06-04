import Alpine from "alpinejs";
import counter from "./alpine/counter.js";
import users from "./alpine/users.js";
import products from "./alpine/products.js";

window.Alpine = Alpine;
Alpine.data("counter", counter);
Alpine.data("users", users);
Alpine.data("products", products);

Alpine.start();
