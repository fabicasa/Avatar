let direction;
let filter;

function avatar(type, num) {
  direction = source(type, num);
  let element = document.getElementById("Avatar");
  element.removeAttribute('class');
  element.src = direction;
}

function source(type, num) {
  return `${type}s/${type} ${num}.png`;
}

function next(thing) {
  let options = document.getElementsByClassName("option");
  let imgOptions = document.getElementsByClassName("imgOption");
  for (var i = 0; i < options.length; ++i) {
    var itemOption = options[i];
    var itemImg = imgOptions[i];
    itemOption.setAttribute("onClick", `mouth('${thing}', ${i + 1})`);
    itemImg.setAttribute("src", `${thing}s/${thing} ${i + 1}.png`);
    itemImg.setAttribute("alt", `${thing} ${i + 1}`);
  }

}

function mouth(type, num) {
  existElementById(type);
  direction = source(type, num);
  var tag = document.createElement("img");
  document.getElementById("AvatarContainer").innerHTML += `<img id="${type}" src="${type}s/${type} ${num}.png" alt="${type} ${num}">`;
}

function existElementById(type) {
  var idElement = document.getElementById(type);
  if(idElement){
      idElement.remove();
  }
}



