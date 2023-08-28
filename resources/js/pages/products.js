import { get } from "../services/request";

export default function (el) {
    el.buttons.forEach(button => {
        button.onclick = () => {
            get(`/products/1`)
                .catch(console.error("It didn't work."))
        }
    });
    console.log('Products');
    return {};
}