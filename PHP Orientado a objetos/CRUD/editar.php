<?php
include("../CRUD/top_bot/top.php");
include("concecionaria.class.php");

session_start();
$pos = $_GET['pos'];
$array = $_SESSION['array'];

if($_POST){
    $array[$pos]->marca = $_POST['marca'];
    $array[$pos]->modelo = $_POST['modelo'];
    $array[$pos]->ano = $_POST['ano'];
    $array[$pos]->cat = $_POST['cat'];
    $array[$pos]->mot = $_POST['mot'];
    $array[$pos]->cor = $_POST['cor'];
    $array[$pos]->cap = $_POST['cap'];
    $array[$pos]->preco = $_POST['preco'];

    $msg =
    '<div id="toast-success" class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
  <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Check icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">Edição realizado com sucesso.</div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>';
}
?>

<div class="overflow-hidden bg-gray-900 max-w-ful h-full">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between xl:flex-row">
      <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">



      </div>
      <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
        <div class="relative">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-teal-accent-400 lg:w-32 lg:-mr-16 sm:block">
            <defs>
              <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
          </svg>
          <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
              Cadastre seu carro
            </h3>
            <form method="POST">
              <!-- FORMULARIO CADASTRO -->
              <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                  <label class="text-dark dark:text-gray-200" for="marca">Marca</label>
                  <input required value="<?php echo $array[$pos] -> marca ?>" id="marca" name="marca" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                  <label class="text-dark dark:text-gray-200" for="modelo">Modelo</label>
                  <input required value="<?php echo $array[$pos] -> modelo ?>" id="modelo" name="modelo" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>


                <div>
                  <label class="text-black dark:text-gray-200" for="ano">Ano Fabricação</label>
                  <input required id="ano" value="<?php echo $array[$pos] -> ano ?>" type="month" name="ano" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                  <label class="text-black dark:text-gray-200" for="cat">Catégoria</label>
                  <select required name="cat" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>hatch</option>
                    <option>sedan</option>
                    <option>minivan</option>
                  </select>
                </div>

                <div>
                  <label class="text-dark dark:text-gray-200" for="mot">Motorização</label>
                  <input required id="mot" value="<?php echo $array[$pos] -> mot ?>" name="mot" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                  <label class="text-dark dark:text-gray-200" for="cor">Cor</label>
                  <input required id="color" value="<?php echo $array[$pos] -> cor ?>" name="cor" type="color" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>



                <div>
                  <label class="text-black dark:text-gray-200" for="cap">C. porta-malas(L)</label>
                  <input required id="cap" name="cap" value="<?php echo $array[$pos] -> cap ?>" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>


                <div>
                  <label class="text-dark dark:text-gray-200" for="preco">Preço</label>
                  <input required id="preco" name="preco" value="<?php echo $array[$pos] -> preco ?>" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>


              </div>
              <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Enviar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="bottom-0 left-20 absolute">
    <?php
    if (isset($msg)) {
      echo $msg;
    }
    ?>
  </div>

            <?php
            include("../CRUD/top_bot/bot.php");
            ?>