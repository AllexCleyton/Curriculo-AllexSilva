# Currículo — Allex Cleyton Will Silva

Descrição
Este projeto fornece uma versão web do meu currículo e possibilita a exportação para PDF. O objetivo é apresentar as minha informações profissionais de forma clara e gerar um PDF pronto para envio ou impressão usando a biblioteca `FPDF`.

Objetivos do projeto
- Exibir um currículo responsivo em navegador.
- Permitir edição simples dos dados do currículo (via `data.json` ou formulário PHP).
- Gerar um PDF fiel ao conteúdo usando `FPDF`.

Conteúdo do repositório
- `index.html` — visualização web do currículo.
- `style.css` — estilos para apresentação na web.
- `script.js` — comportamento do frontend: carregamento, edição e submissão de dados.
- `data.json` — arquivo com os dados do currículo (nome, contato, resumo, experiências, educação e habilidades).
- `load_data.php` — endpoint que retorna os dados do currículo ao frontend.
- `add_data.php` — endpoint que recebe e grava/atualiza `data.json`.
- `generate_pdf.php` — gera o PDF a partir dos dados atuais usando `FPDF`.
- `fpdf/` — biblioteca FPDF e utilitários necessários para gerar o PDF.
- `img/` — imagens usadas no currículo (foto, logos, ícones).
