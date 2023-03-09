<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin oldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-dark {
            background-color: #4618AC !important;
        }
    </style>
</head>
<body>
<div class="container-fluid">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menü</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Felhasználók</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu3" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Játék feltöltése</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
            <div id="content">Welcome to the admin panel!</div>
            <div id="felhasznalok" style="display: none;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Felhasználónév</th>
                            <th>Név</th>
                            <th>Jogosultság</th>
                        </tr>
                    </thead>
                    <tbody id="felhasznalok-body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    // adatbázisból felhasználók lekérése és táblázatba helyezése
    function listazFelhasznalok() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let felhasznalok = JSON.parse(this.responseText);
                let tbody = document.getElementById("felhasznalok-body");
                for (let i = 0; i < felhasznalok.length; i++) {
                    let tr = document.createElement("tr");
                    let td1 = document.createElement("td");
                    let td2 = document.createElement("td");
                    let td3 = document.createElement("td");
                    let td4 = document.createElement("td");
                    td1.innerText = felhasznalok[i].id;
                    td2.innerText = felhasznalok[i].felhasznalonev;
                    td3.innerText = felhasznalok[i].nev;
                    td4.innerText = felhasznalok[i].jogosultsag;
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    tbody.appendChild(tr);
                }
            }
        };
        xhttp.open("GET", "felhasznalok.php", true);
        xhttp.send();
    }
    
    // menüpont váltás kezelése
    let menu = document.getElementById("menu");
    menu.addEventListener("click", function(event) {
        event.preventDefault();
        let target = event.target;
        if (target.getAttribute("data-bs-toggle") == "collapse") {
            target.classList.toggle("collapsed");
            let submenu = document.getElementById(target.getAttribute("href").substring(1));
            submenu.classList.toggle("show");
        } else {
            let href = target.getAttribute("href").substring(1);
            let content = document.getElementById(href);
            let active = menu.querySelector(".active");
            if (active) {
                active.classList.remove("active");
            }
            target.classList.add("active");
            document.title = target.innerText;
            if (href == "felhasznalok") {
                listazFelhasznalok();
            } else {
                content.style.display = "block";
            }
            let divs = content.parentNode.querySelectorAll(":scope > div");
            for (let i = 0; i < divs.length; i++) {
                if (divs[i].id != href) {
                    divs[i].style.display = "none";
                }
            }
        }
    });
</script>



