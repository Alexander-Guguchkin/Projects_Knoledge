import "./bootstrap";

import "@toast-ui/editor/dist/toastui-editor.css";

import Editor from "@toast-ui/editor";

const editor = new Editor({
    el: document.querySelector("#editor"),
    height: "306px",
    initialEditType: "markdown",
    previewStyle: "vertical",
});

const text_content = document.querySelector("#text_content");
const save_button = document.querySelector("#save_button");
save_button.addEventListener("click", () => {
    let text = editor.getMarkdown();
    text_content.value = text;
    console.log(text_content.value, text_content);
});
