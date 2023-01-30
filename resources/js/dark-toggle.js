//darkmode

const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");
const text = document.querySelector("#dark");

darkToggle.addEventListener("click", function () {
    if (darkToggle.checked) {
        html.classList.add("dark");
        text.classList.add("text-yellow-300");
        localStorage.theme = "dark";
    } else {
        html.classList.remove("dark");
        text.classList.remove("text-yellow-300");
        localStorage.theme = "light";
    }
});

//pindahkan teks

if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    darkToggle.checked = true;
} else {
    darkToggle.checked = false;
}
