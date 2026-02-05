<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css'])
  <style type="text/tailwindcss">
    @theme {

    }
  </style>
  <title>Rede Leoas - Site Oficial</title>
</head>
<body class="bg-bege text-preto font-sans">

  <nav class="sticky top-0 z-50 bg-bege/90 backdrop-blur-md border-b border-verde-oliva/10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-2xl font-bold tracking-tighter text-verde-oliva uppercase">Rede Leoas</div>
      <div class="hidden md:flex gap-8 text-sm font-medium uppercase tracking-widest">
        <a href="#quem-somos" class="hover:text-terracota transition">Quem Somos</a>
        <a href="#projetos" class="hover:text-terracota transition">Projetos</a>
        <a href="#eventos" class="hover:text-terracota transition">Eventos</a>
        <a href="#contato" class="hover:text-terracota transition">Contato</a>
      </div>
      <a href="#cadastro" class="bg-terracota text-white px-6 py-2 rounded-full text-sm font-bold hover:bg-verde-oliva transition shadow-lg">
        CADASTRE-SE
      </a>
    </div>
  </nav>

  <header class="relative h-[85vh] flex items-center justify-center overflow-hidden bg-preto">
    <div class="absolute inset-0 opacity-40 bg-(image:--image) bg-cover bg-top" style="background-position-y: 35%; --image: url({{  asset('/static/img/cover.webp') }})">
      {{-- <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=2000" alt="Mulheres Protagonistas" class="w-full h-full object-cover"> --}}
    </div>
    <div class="relative z-10 text-center px-6 max-w-4xl">
      <h1 class="text-4xl md:text-6xl font-bold text-bege mb-6 leading-tight uppercase">
        Fortalecendo o Protagonismo Feminino
      </h1>
      <p class="text-lg md:text-xl text-bege/90 mb-10 font-light max-w-2xl mx-auto">
        Uma rede dedicada à proteção, desenvolvimento e enfrentamento à violência contra a mulher.
      </p>
      <div class="flex flex-col md:flex-row gap-4 justify-center">
        <button class="bg-verde-oliva text-bege px-8 py-4 rounded-md font-bold hover:scale-105 transition">CONHEÇA NOSSA MISSÃO</button>
        <button class="border-2 border-bege text-bege px-8 py-4 rounded-md font-bold hover:bg-bege hover:text-preto transition">REVISTA REDE LEOAS</button>
      </div>
    </div>
  </header>

  <section id="quem-somos" class="py-24 px-6 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center">
      <div>
        <span class="text-terracota font-bold tracking-[0.2em] text-sm uppercase">Nossa Instituição</span>
        <h2 class="text-4xl font-bold mt-4 mb-6 leading-snug">Unidas pela Proteção e Consciência</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          A Rede Leoas atua no fortalecimento e proteção de mulheres, promovendo consciência e protagonismo em diversas esferas da sociedade.
        </p>
        <div class="bg-verde-oliva/5 border-l-4 border-verde-oliva p-6 italic text-verde-oliva">
          "Nossa missão é fortalecer mulheres por meio da informação, acolhimento e visibilidade".
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div class="bg-verde-oliva h-64 rounded-2xl flex items-end p-6 shadow-xl">
          <span class="text-bege font-bold text-xl uppercase">Impacto Social</span>
        </div>
        <div class="bg-terracota h-64 rounded-2xl mt-12 flex items-end p-6 shadow-xl text-bege">
          <span class="font-bold text-xl uppercase">Liderança</span>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-preto py-24 text-bege overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-16">
      <div class="w-full md:w-1/3 aspect-[3/4] bg-neutral-800 rounded-3xl overflow-hidden shadow-2xl grayscale hover:grayscale-0 transition duration-700">
         <div class="w-full h-full bg-verde-oliva/20 flex items-center justify-center text-bege/20 " >
            <img src="{{  asset('static/img/shirley_gomes.webp') }}" alt="Shirlley Gomes" >
        </div>
      </div>
      <div class="w-full md:w-2/3">
        <span class="text-terracota font-bold tracking-widest uppercase text-sm">Liderança e Inspiração</span>
        <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Shirlley Gomes</h2>
        <p class="text-xl text-bege/80 font-light mb-8 leading-relaxed">
          Presidente da Associação Rede Leoas, liderança feminina comprometida com o fortalecimento, o protagonismo e a proteção das mulheres.
        </p>
        <hr class="border-bege/20 mb-8">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
          <div>
            <div class="text-terracota font-bold text-3xl mb-1">100%</div>
            <div class="text-xs uppercase tracking-tighter opacity-60">Comprometimento</div>
          </div>
          <div>
            <div class="text-terracota font-bold text-3xl mb-1">+ Impacto</div>
            <div class="text-xs uppercase tracking-tighter opacity-60">Social Concreto</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cadastro" class="py-24 bg-bege">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4 uppercase tracking-tight">Faça parte da Rede</h2>
      <p class="mb-10 text-gray-600 italic">Cadastre-se para receber informações sobre eventos e novos projetos.</p>

      <livewire:assinante.form />
    </div>
  </section>

  <footer class="bg-verde-oliva py-16 text-bege border-t border-bege/10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">
      <div class="col-span-1 md:col-span-2">
        <h3 class="text-2xl font-bold mb-6">REDE LEOAS</h3>
        <p class="text-bege/70 max-w-sm">
          Fortalecendo mulheres, gerando conexão emocional e visibilidade institucional.
        </p>
      </div>
      <div>
        <h4 class="font-bold mb-4 uppercase text-xs tracking-widest text-terracota">Navegação</h4>
        <ul class="text-sm space-y-2 opacity-80">
          <li><a href="#" class="hover:underline">Home</a></li>
          <li><a href="#" class="hover:underline">Quem Somos</a></li>
          <li><a href="#" class="hover:underline">Projetos Realizados</a></li>
          <li><a href="#" class="hover:underline">Revista Rede Leoas</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-4 uppercase text-xs tracking-widest text-terracota">Contato</h4>
        <p class="text-sm opacity-80 mb-4">Fale conosco através dos nossos canais oficiais.</p>
        <div class="flex gap-4">
          <div class="w-8 h-8 bg-bege/10 rounded-full flex items-center justify-center hover:bg-terracota cursor-pointer transition italic">IG</div>
          <div class="w-8 h-8 bg-bege/10 rounded-full flex items-center justify-center hover:bg-terracota cursor-pointer transition italic">WA</div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
