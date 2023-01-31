var goToEmployee = document.getElementById("goToEmployee");
var goToCustomer = document.getElementById("goToCustomer");
var ajoutID = document.getElementById("ajoutID");

var ajoutBDD = document.getElementById("ajoutBDD");

function fLoadEmployee(){
    ajoutBDD.innerHTML = `<div class="bg-white p-6 rounded-lg shadow-md">
    <div class = "mb-2"> <h3>Vous pouvez ajouter des articles ici</h3> </div>
    <form id="form-message" method="post">
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="id">ID du nouveau produit (ne doit pas déjà exister)*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="id" name="id" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="type">Type de produit (entrer fruit ou livre svp)*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="type" name="type" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="price">Prix*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="price" name="price" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="stock">Stock*</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="int" id="stock" name="stock" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="description" name="description" >No description available</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="name">Nom (uniquement pour fruit)</label>
            <input class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="name" name="name" >
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="title">Titre (uniquement pour livre)</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="title" name="title" ></textarea
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="author">Auteur (uniquement pour livre)</label>
            <textarea class="bg-gray-200 p-2 rounded-lg w-full" type="text" id="author" name="author" ></textarea>
        </div>
        <div class="text-center text-success">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" type="submit">Enregistrer</button>
        </div>
    </form>
</div>`;
    ajoutID.innerHTML = `<li class="list-group-item"> <h6>Identifiant : <?php echo $f['id'] ?></h6></li>` + ajoutID.innerHTML
}


function fLoadCustomer(){
    ajoutBDD.innerHTML = "";
    ajoutID.innerHTML = `<li class="list-group-item"> <h6>Auteur : <?php echo $f['author'] ?></h6></li>
    <li class="list-group-item"> <h6>Prix : <?php echo($f['price'] . ' euros') ?></h6></li>
    <li class="list-group-item"> <h6>Stocks disponibles : <?php echo $f['stock'] ?></h6></li>`
}




goToEmployee.addEventListener("click",fLoadEmployee);
goToCustomer.addEventListener("click",fLoadCustomer)