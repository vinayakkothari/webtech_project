document.querySelector("#search").addEventListener("keyup", (e) => {
    console.log(e.target.value);
    if (!e.target?.value) {
        document
            .querySelectorAll(".product-name")
            .forEach((product) =>
                product.parentElement.parentElement.parentElement.classList.remove(
                    "hidden"
                )
            );

        return;
    }

    document
        .querySelectorAll(".product-name")
        .forEach((product) =>
            product.textContent
                .toLocaleLowerCase()
                .includes(e.target.value.toLocaleLowerCase())
                ? product.parentElement.parentElement.parentElement.classList.remove(
                      "hidden"
                  )
                : product.parentElement.parentElement.parentElement.classList.add(
                      "hidden"
                  )
        );
});
