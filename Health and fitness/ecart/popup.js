let items = document.getElementsByClassName("buy");
let e;
for (let item of items) {
    //An item consists of this HTML
    /*<div class="grid-item buy"><img src="images/ice-cream2.jpg">
        <h2>Watermelon Buttermilk stick<br>Cost: $3/-</h2>
        <div class="modal">
            <div class="modal-content">
                <p>Details 2</p> <!--This gets replaced when popup becomes visible-->
            </div>
        </div>
    </div>*/
    item.details = item.getElementsByTagName("p")[0].innerText;
    item.onclick = function (event) {
        popupElem = this.getElementsByClassName("modal")[0];
        
        //A popup item is like this:
        /*<div class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">×</span>
                <img src="http://localhost:8080/images/250_Rainbow_Milk_Bar1.png">
                Watermelon Buttermilk bar<br>Cost: $3.5/-<br>Details<br>
                <button class="add">Add to Cart</button>
            </div>
        </div>*/
        switch (event.target.tagName.toLowerCase()) {
            //It is click while in grid system so generate popup details and show it.
            case "img":
                //close button + Price & Name + original details in html + Add to Cart button

                itemName = this.getElementsByTagName("h2")[0].innerHTML.split("<br>")[0];
                buyBtnText = sessionStorage.getItem(itemName)?"Added":"Add";

                popupElem.firstElementChild.innerHTML = `
                <span class="close">&times;</span>
                <h3 class="item-name">
                    ${itemName}
                </h3> 
                <img src="${item.getElementsByTagName("img")[0].src}"/>
                <br>
                <h3 class="item-price" >
                    ${this.getElementsByTagName("h2")[0].innerHTML.split("<br>")[1]}
                </h3>
                ${this.details}
                <br>
                <br>
                <button class="${buyBtnText.toLowerCase()}">${buyBtnText} to Cart</button>`

                popupElem.style.display = "block";
                break;


                //Either click is outside(modal is div) popup or on close button(which is span),simply hide popup.
            case "div":
            case "span":
                popupElem.style.display = "none";
                break;

                //The add to cart button
            case "button":
                addButtonElem = popupElem.getElementsByClassName("add")[0];
                addButtonElem.className = "added";
                addButtonElem.innerText = "Added to Cart!";
                itemName = popupElem.getElementsByClassName("item-name")[0].innerText;
                itemCost = popupElem.getElementsByClassName("item-price")[0].innerText.split(":")[1];
                itemExt = popupElem.getElementsByTagName("img")[0].src.split("/")[popupElem.getElementsByTagName("img")[0].src.split("/").length - 1]
                itemData  = {
                    amount : 1,
                    cost : itemCost,
                    url : itemExt
                }
                sessionStorage.setItem(itemName,JSON.stringify(itemData))

                break;
        }

        console.log(`Clicked on full elem on ${event.target.className} of ${event.target.tagName}`);
    }
};