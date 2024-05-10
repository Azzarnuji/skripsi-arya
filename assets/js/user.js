var pathArray = window.location.pathname.split("/");
var newPathname = "";

let classActive = $(".active");
let hostName = window.location.host;

for (i = 0; i < pathArray.length; i++) {
  newPathname += "/";
  newPathname += pathArray[i];
}
const redirecTo = (val) => {
  let hostName = window.location.origin;
  let hrefValue = val["hash"];
  window.location.replace(hostName + "/" + hrefValue);
};

const setActive = (id) => {
  newId = id.replace("//", "");
  if (newId.includes("/")) {
    arrayNewId = newId.split("/");
    $(".active").removeClass("active");
    $("#" + arrayNewId[0]).addClass("active");
  } else {
    if (id != "//") {
      if (id == 'about'){
          newId = "tentang_kami"
      }else if (id == 'kontak'){
          newId = "kontak_kami"
      }
      $(".active").removeClass("active");
      $("#" + newId).addClass("active");
    }
  }
};

if (newPathname != classActive) {
  let hashValue = window.location.hash;
  newHashValue = hashValue.replace("#", "");
  if (newHashValue == "") {
    setActive(newPathname);
  } else {
    setActive(newHashValue);
  }
}
