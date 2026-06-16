const btn = document.getElementById("theme-btn");

if(localStorage.getItem("tema") === "dark"){
    document.body.classList.add("dark");
    btn.checked = true;
}

btn.addEventListener("change", () => {

    document.body.classList.toggle("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("tema", "dark");
    } else {
        localStorage.setItem("tema", "light");
    }

});