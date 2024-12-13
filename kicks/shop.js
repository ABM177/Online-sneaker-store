const popup = document.getElementById("popup");
const popupTitle = document.getElementById("popup-title");
const popupPrice = document.getElementById("popup-price");
const popupImage = document.getElementById("popup-image");

function openPopup(title, price, image) {
    popupTitle.textContent = title;
    popupPrice.textContent = price;
    popupImage.src = image;
    popup.style.display = "flex";
}

function closePopup() {
    popup.style.display = "none";
}
