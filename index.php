<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulario</title>
</head>

<body class="h-screen w-screen bg-blend-multiply">

    <?php
    // Função para obter parâmetros da URL
    function getParameterByName($name, $url) {
        if (!$url) $url = $_SERVER['REQUEST_URI'];
        $name = preg_replace('/[\[\]]/', '\\$&', $name);
        $regex = '/[?&]' . $name . '(=([^&#]*)|&|#|$)/';
        preg_match($regex, $url, $matches);
        if (!$matches) return null;
        if (!$matches[2]) return '';
        return urldecode($matches[2]);
    }
    
    // Obtém os valores dos parâmetros 'vendedor' e 'campanha' da URL
    $vendedorValue = getParameterByName('vendedor', $_SERVER['REQUEST_URI']);
    $campanhaValue = getParameterByName('campanha', $_SERVER['REQUEST_URI']);
    ?>

    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D4T000000Fw59"
        method="POST">
        <input type="hidden" name="oid" value="00D4T000000Fw59">
        <input type="hidden" name="retURL" value="http://rodoparana.com.br">
        <input type=hidden name="recordType" id="recordType" value="012Np0000009Goj">
        <input type="hidden" name="Campaign_ID" value="<?php echo htmlspecialchars($campanhaValue); ?>">
        <input type="hidden" id="00NNp000004vdC1" name="00NNp000004vdC1"
            value="<?php echo htmlspecialchars($vendedorValue); ?>">


        <div class="flex justify-center align-items-center">
            <div class="max-w-40 p-4">
                <img src="Assets/logo.png" alt="">
            </div>
        </div>
        <div id="CentralizaCard" class="">
            <div id=" Card"
                class="container mx-auto p-4 rounded-xl shadow-md overflow-hidden backdrop-blur-md bg-black/20 m-4 flex items-align justify-center lg:h-[520px]">

                <div id=" DivideContent" class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div id="LeftContent" class="md:order-1 flex flex-col justify-center items-align">

                        <div id="content-text" class="flex flex-col gap-[16px] p-4 lg:p-10">
                            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                                Receba seu brinde exclusivo!
                            </h1>
                            <p class="text-xl md:text-2xl lg:text-3xl">
                                Preencha as informações ao lado e receba seu brinde exclusivo da RANDON Rodoparaná.
                            </p>
                        </div>
                        <div id="social" class="invisible md:visible gap-5 flex flex-row lg:p-10 ">
                            <div id=" instagram" class="gap-1 flex flex-row hover:text-sky-400">
                                <img src="Assets/instagram.svg" alt="" width="29" height="29" />
                                <a href="https://www.instagram.com/rodoparanarandon/">@rodoparanarandon</a>
                            </div>
                            <div id="web" class="gap-1 flex flex-row hover:text-sky-400">
                                <img src="Assets/web.svg" alt="" width="29" height="29" class="fill-current" />
                                <a href="https://www.rodoparana.com.br/">rodoparana.com.br</a>
                            </div>
                        </div>
                    </div>

                    <div id="RightContent" class="md:order-2 sm:min-h-auto flex content-evenly">
                        <div id=" form"
                            class=" flex justify-center items-align content-evenly flex-col items-center  rounded-md shadow-2xl w-full">
                            <div id="Nome" class="w-full pb-3 lg:py-5">
                                <input
                                    class="block border-b-[1px] order-b-white bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-100 w-full focus:ring-transparent"
                                    id="last_name" maxlength="80" name="last_name" size="20" type="text"
                                    placeholder="Nome Completo: *" Required />
                            </div>
                            <div id="Empresa/CNPJ" class="flex flex-col md:flex-row gap-3 w-full pb-3 lg:py-5">
                                <div id="Empresa" class="w-full">
                                    <input
                                        class="block border-b-[1px]  border-b-white bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-100 w-full"
                                        id="company" maxlength="40" name="company" size="20" type="text"
                                        placeholder="Empresa" Required />
                                </div>
                                <div id="CNPJ" class="w-full">
                                    <input
                                        class="block border-b-[1px]  border-b-white bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-100 w-full"
                                        id="00N4T00000700nJ" name="00N4T00000700nJ" maxlength="14" size="20" type="text"
                                        placeholder="CNPJ" />
                                </div>
                            </div>

                            <div id="Email" class="w-full pb-3 lg:py-5">
                                <input
                                    class="block border-b-[1px]  border-b-white bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-100 w-full"
                                    type="text" id="email" maxlength="80" name="email" size="20"
                                    placeholder="Seu Email:" />
                            </div>

                            <div id="Telefone" class="w-full pb-3 lg:py-5">
                                <input
                                    class="block border-b-[1px]  border-b-white bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-100 w-full"
                                    id="phone" maxlength="40" class="" name="phone" size="20" type="text"
                                    placeholder="Telefone:*" Required />
                            </div>

                            <div id="Área de Interesse" class="w-full pb-3 lg:py-5">
                                <select
                                    class=" block border-t-0 border-b-[1px]  border-b-white py-1.5 pl-1 text-white placeholder:text-gray-100 w-full bg-transparent focus:bg-gray-900"
                                    id="00NHY000000QHjc" required="required" name="00NHY000000QHjc"
                                    title="Selecione a área de interesse">
                                    <option value="">Selecione a área de interesse: *</option>
                                    <option value="Consorcio">Consorcio</option>
                                    <option value="Novos">Novos</option>
                                    <option value="Peças">Peças</option>
                                    <option value="Pneus">Pneus</option>
                                    <option value="Seminovos">Seminovos</option>
                                    <option value="Serviços">Serviços</option>
                                </select>
                            </div>

                            <button
                                class=" flex justify-center rounded-full border-[1px] mt-3 py-2 px-3 uppercase text-sm w-[60%] hover:border-sky-400 hover:text-sky-400 hover:border-[2px]"
                                type="submit" name="submit">Enviar</button>
                        </div>
                    </div>
                    <div id="social" class="gap-5 flex justify-center lg:p-10 lg:hidden md:hidden">
                        <div class="flex flex-row">
                            <div id=" instagram" class="gap-1 flex flex-row hover:text-sky-400">
                                <img src="Assets/instagram.svg" alt="" width="29" height="29" />
                                <a href="https://www.instagram.com/rodoparanarandon/">@rodoparanarandon</a>
                            </div>
                            <div id="web" class="gap-1 flex flex-row hover:text-sky-400">
                                <img src="Assets/web.svg" alt="" width="29" height="29" class="fill-current" />
                                <a href="https://www.rodoparana.com.br/">rodoparana.com.br</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </form>

</body>

</html>

<style>
html {
    height: 100%;
    width: 100%;
}

body {

    color: white;
    background-color: rgba(0, 0, 0, 0.47);
    background-image: url("Assets/background.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: stretch;
}
</style>