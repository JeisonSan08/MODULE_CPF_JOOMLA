# ✅ VALIDADOR CPF JOOMLA

**Módulo Joomla para validação de campo CPF com máscara e verificação de dígitos.**

Este módulo permite validar campos de CPF em qualquer componente do Joomla (como formulários de contato, registro de usuários, Fabrik, etc.), garantindo que os dados inseridos estejam corretamente formatados e válidos de acordo com o padrão do CPF brasileiro.

---

## 📌 Compatibilidade

- Joomla 3.x ✅  
- Joomla 4.x ✅

---

## 🛠️ Funcionalidades

- Máscara automática para campos de CPF (`000.000.000-00`)
- Verificação completa de CPF com validação dos dígitos verificadores
- Funciona com `input[name]` ou `input[id]`
- Suporte opcional a campos extras como telefone, celular, CEP e data com máscaras específicas

---

## 🔧 Parâmetros do Módulo

| Parâmetro     | Descrição |
|---------------|-----------|
| **tipo**      | Define o seletor dos campos (0 = `name`, 1 = `id`) |
| **jQuery**    | Habilita inclusão automática do jQuery (0 = sim, 1 = não) |
| **campo1–10** | Define os nomes/IDs dos campos de CPF a aplicar máscara |
| **tel**       | Campo com máscara de telefone (formato: (00) 000000009) |
| **cel**       | Campo com máscara de celular (formato: (00) 000000009) |
| **cep**       | Campo com máscara de CEP (formato: 00000-000) |
| **data**      | Campo com máscara de data (formato: 00/00/0000) |
| **nome**      | Ativa a validação lógica do CPF (1 = sim) |

---

## 📥 Instalação

1. Acesse o backend do Joomla.
2. Vá para **Extensões > Gerenciador de Extensões > Instalar**.
3. Faça upload do arquivo ZIP do módulo.
4. Publique o módulo em qualquer posição, ou use como auxiliar (sem exibição direta).

---

## 🧪 Como Usar

No seu formulário, adicione um campo com `name` ou `id` conforme definido no parâmetro do módulo. Exemplo:

```html
<input type="text" name="cpf_usuario" />
```

No módulo, defina `campo1 = cpf_usuario`.

Ao perder o foco (`blur`), a máscara é aplicada e a validação do CPF é executada. Se o CPF for inválido, o campo será limpo e uma mensagem de alerta será exibida.

---

## 📚 Dependências

- [jQuery 2.2.4](https://code.jquery.com/jquery-2.2.4.min.js)
- [jquery.mask.js](https://igorescobar.github.io/jQuery-Mask-Plugin/)

Essas bibliotecas são automaticamente incluídas se `jQuery = 0`.

---

## 📎 Exemplo de Aplicação

```html
<input type="text" name="cpf_usuario" />
<input type="text" name="telefone_usuario" />
<input type="text" name="cep_usuario" />
```

Configuração no módulo:

- tipo: 0  
- campo1: cpf_usuario  
- tel: telefone_usuario  
- cep: cep_usuario  
- nome: 1



---

## 📄 Licença

Distribuído sob a licença MIT.  
Uso livre para fins pessoais e comerciais.
