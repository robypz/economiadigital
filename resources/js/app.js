import "./bootstrap";
import EditorJS from "@editorjs/editorjs";
import List from "@editorjs/list";
import Header from "@editorjs/header";

const editor = new EditorJS({
    tools: {
        header: Header,
        list: {
            class: List,
            inlineToolbar: true,
            config: {
                defaultStyle: "unordered",
            },
        },
    },
});

var form = document.getElementById('content-store-form');

if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        editor.save().then((outputData) => {
            axios.post(form.action, {
                unit_id : document.getElementById('unit_id').value,
                title: document.getElementById('title').value,
                itemization: outputData,
              })
              .then(function (response) {
                window.location.href = "http://economiadigital.test/content/show/"+response.data.id;
              })
              .catch(function (error) {
                console.log(error);
              });
        }).catch((error) => {
            alert(error);
        });
    });
}
