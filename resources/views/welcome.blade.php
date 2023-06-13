<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordem de Serviço Kalex Informatica</title>
  @vite('resources/css/app.css')
</head>
<body>
    @if (isset($showsearch))
        <section class="py-20 bg-white">
            <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
                <div class="relative">
                    <h2 class="w-full text-3xl font-bold text-center sm:text-3xl md:text-5xl">Sejá bem vindo ao suporte!</h2>
                </div>
                <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
                    <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                        <img class="rounded-lg shadow-xl" src="https://st2.depositphotos.com/1823350/10260/v/450/depositphotos_102609836-stock-illustration-computer-service-man-repairing-computer.jpg" alt="">
                    </div>
                    <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                        <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Ordem de serviço</p>
                        <h3 class="mt-2 text-2xl sm:text-left md:text-4xl mb-2">OS: {{$showsearch[0]['ordem']}}</h3>
                        <div class="max-w-2xl mx-auto">
                            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                                <li class="mb-10 ml-4">
                                    <div
                                        class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                    </div>
                                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{$showsearch[0]['created_at']}}</time>
                                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{$showsearch[0]['product']}}</p>
                                    <p class="mb-4 text-base font-bold text-gray-700 dark:text-gray-700">Defeito:</p>
                                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{$showsearch[0]['description']}}</p>
                                    <p class="mb-4 text-base font-normal text-red-500 dark:text-red-400">Valor do serviço: R$ {{$showsearch[0]['price']}}</p>
                                    <a href="#"
                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Imprimir
                                        <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                                    @if($showsearch[0]['report'])
                                        <li class="mb-10 ml-4">
                                            <div
                                                class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                            </div>
                                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Laudo</time>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{$showsearch[0]['report']}}</p>
                                        </li>
                                    @endif
                            </ol>
                            <a href="{{route('home')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="py-20 bg-white">
            <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
                <div class="relative">
                    <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl">Sejá bem vindo ao suporte!</h2>
                    <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl"></p>
                </div>
                <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
                    <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                        <img class="rounded-lg shadow-xl" src="https://st2.depositphotos.com/1823350/10260/v/450/depositphotos_102609836-stock-illustration-computer-service-man-repairing-computer.jpg" alt="">
                    </div>
                    <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                        <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase">Ordem de serviço</p>
                        <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Qual e o número da "OS"</h3>
                        <p class="mt-5 text-lg text-gray-700 text md:text-left">Digite o numero da os abaixo e click em buscar,Pronto iremos apresentar todas as informações sobre sua OS.</p>
                        <div class="w-full bg-gray-200 p-5">
                        <form method="GET" action="/" class="flex">
                            @csrf
                            <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-white p-5">
                            <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                                <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                            </svg>
                            </div>
                            <input type="text" name="os" required  class="w-full bg-white pl-2 text-base font-semibold outline-0" />
                            <input type="submit" value="Buscar" class="bg-blue-500 p-2 rounded-tr-lg rounded-br-lg text-white font-semibold hover:bg-blue-800 transition-colors"/>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</body>
</html>
