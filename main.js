
const updatePrice = (type, brand) => {
    let price;
    switch (type) {
        case "concealer":
            price = brand === "nyx" ? 35 : 30;
            break;
        case "Blush":
            price = brand === "maybelline" ? 20 : 25;
            break;
        case "lipstick":
            price = brand === "morph" ? 30 : 25;
            break;
        default:
            price = 0;
    }
    return price;
};
