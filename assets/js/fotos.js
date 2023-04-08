const content = document.getElementById("foto");
const fetchURL = "../assets/json/fotos.json";
let photos;

document.getElementById("filterAll").addEventListener("click", () => DisplayPhotos(1));
document.getElementById("filterGarage").addEventListener("click", () => DisplayPhotos(2));
document.getElementById("filterSchupfart").addEventListener("click", () => DisplayPhotos(3));
document.getElementById("filterAndere").addEventListener("click", () => DisplayPhotos(4));

fetch(fetchURL)
    .then((response) => response.json())
    .then((json) => {
        photos = json;
        photos.forEach((element) => {
            CreateImages(element);
        });
    });

function DisplayPhotos(type) {
    content.innerHTML = "";
    switch (type) {
        case 1:
            photos.forEach((element) => {
                CreateImages(element);
            });
            break;

        case 2:
            photos.forEach((element) => {
                if (element.filter == "garage") {
                    CreateImages(element);
                }
            });
            break;
        case 3:
            photos.forEach((element) => {
                if (element.filter == "Schupfart") {
                    CreateImages(element);
                }
            });
            break;
        case 4:
            photos.forEach((element) => {
                if (element.filter == "andere") {
                    CreateImages(element);
                }
            });
            break;
        default:
            photos.forEach((element) => {
                CreateImages(element);
            });
            break;
    }
}

function CreateImages(element) {
    var div = document.createElement("div");
    div.classList.add("sp-img");
    div.classList.add("img");
    if (element.width == "col") {
        div.classList.add("image-grid-row-2");
    }
    content.appendChild(div);

    var img = document.createElement("img");
    img.src = element.img;
    div.appendChild(img);
}