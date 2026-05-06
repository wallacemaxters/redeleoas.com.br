<!-- Seção do Evento: Primeira Feijoada -->
<section id="eventos" class="py-24 bg-bege/70 backdrop-blur-lg fixed bottom-0 w-full z-50" x-data="{ open: $persist(true) }" x-cloak x-show="open">
    <a class="h-6 w-6 block absolute right-4 top-4" x-on:click="open = !open"><x-icon name="heroicon-o-x-mark" /></a>
  <div class="max-w-6xl mx-auto px-6">
    <div class="bg-black rounded-3xl overflow-hidden shadow-2xl flex flex-col lg:flex-row">

      <!-- Lado Esquerdo: Imagem/Visual (Inspirado no Flyer) -->
      <div class="lg:w-2/5 bg-neutral-900 relative p-12 flex flex-col justify-center items-center text-center border-b lg:border-b-0 lg:border-r border-terracota/20">
        <div class="absolute inset-0 opacity-20 bg-(image:--image)" style="--image: url({{ asset('static/img/wood-pattern.png') }})"></div>
        <span class="relative z-10 text-terracota font-bold tracking-[0.3em] uppercase text-sm mb-4">Mês das Mães</span>
        <h2 class="relative z-10 text-bege text-4xl font-black leading-none uppercase">Primeira<br><span class="text-terracota text-6xl">Feijoada</span><br>Rede Leoas</h2>
        <div class="relative z-10 mt-8 py-2 px-6 border-2 border-terracota text-terracota font-bold rounded-full">
          R$ 37,90
        </div>
      </div>

      <!-- Lado Direito: Informações e Reserva -->
      <div class="lg:w-3/5 p-8 md:p-16 flex flex-col justify-center bg-zinc-950">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
          <!-- Data -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-verde-oliva/20 rounded-full flex items-center justify-center text-verde-oliva text-xl">📅</div>
            <div>
              <p class="text-bege/50 text-xs uppercase tracking-widest">Data e Dia</p>
              <p class="text-bege font-bold text-lg">16/05 • Sábado</p>
            </div>
          </div>
          <!-- Horário -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-verde-oliva/20 rounded-full flex items-center justify-center text-verde-oliva text-xl">⏰</div>
            <div>
              <p class="text-bege/50 text-xs uppercase tracking-widest">Horário</p>
              <p class="text-bege font-bold text-lg">14h às 16h</p>
            </div>
          </div>
          <!-- Local -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-verde-oliva/20 rounded-full flex items-center justify-center text-verde-oliva text-xl">📍</div>
            <div>
              <p class="text-bege/50 text-xs uppercase tracking-widest">Localização</p>
              <p class="text-bege font-bold text-lg">Contagem - MG</p>
            </div>
          </div>
          <!-- Atrações -->
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-verde-oliva/20 rounded-full flex items-center justify-center text-verde-oliva text-xl">🎁</div>
            <div>
              <p class="text-bege/50 text-xs uppercase tracking-widest">Incluso</p>
              <p class="text-bege font-bold text-lg">Open Feijoada</p>
            </div>
          </div>
        </div>

        <!-- Botão de Ação via WhatsApp conforme o flyer -->
        <a href="https://wa.me/5531986724898?text=Olá! Quero reservar minha vaga para a Feijoada Rede Leoas"
           class="bg-terracota text-white text-center py-5 rounded-xl font-bold uppercase tracking-[0.2em] hover:bg-verde-oliva transition-all shadow-xl flex flex-col items-center group">
          <span>GARANTIR MINHA VAGA</span>
          <span class="text-[10px] opacity-70 font-normal mt-1 group-hover:opacity-100 italic">Reservar via WhatsApp / PIX: 31 98672-4898</span>
        </a>
      </div>
    </div>
  </div>
</section>
