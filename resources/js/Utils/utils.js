const getImageUrl = (name) => {
    return new URL(`/resources/images/${name}`, import.meta.url).href;
};

const textShortener = (text) => {
    return text.substring(0, 80) + "...";
};

export { getImageUrl, textShortener };
