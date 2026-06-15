**Curriculo Web**

Descrição
Este projeto fornece uma versão web do meu currículo `Allex Cleyton Will Silva` e uma opção para exportá-lo em PDF. O objetivo é permitir que eu apresente as minhas competências, experiências e formação em um layout limpo e gere um PDF pronto para envio ou impressão utilizando a biblioteca `FPDF`.

Objetivos
- Exibir um currículo responsivo em navegador.
- Permitir edição simples dos dados do currículo (via `data.json` ou formulário PHP).
- Gerar um PDF com o conteúdo do currículo usando `FPDF`.

O que tem no projeto
- [index.html](index.html) — página principal com a visualização do currículo.
- [style.css](style.css) — estilos para a apresentação web.
- [script.js](script.js) — lógica do frontend: carregamento e submissão de dados.
- [data.json](data.json) — arquivo com os dados do currículo (nome, contato, resumo, experiências, educação, competências, links).
- [load_data.php](load_data.php) — endpoint para retornar os dados do currículo ao frontend.
- [add_data.php](add_data.php) — endpoint para receber e salvar dados enviados pelo formulário.
- [generate_pdf.php](generate_pdf.php) — script que monta e entrega o PDF usando a biblioteca `FPDF`.
- [fpdf/](fpdf/) — biblioteca `FPDF` e recursos auxiliares para criar o PDF.
- [img/](img/) — imagens usadas no currículo (foto, ícones, logos).