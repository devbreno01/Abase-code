Exercício 2 — Sistema de Autenticação (Token)

Contexto real
Você está criando a lógica base de autenticação de uma API.

Crie as classes:

    -User
    -AuthService
    -TokenGenerator

Regras

User
    id
    email
    passwordHash
    verifyPassword($plainPassword)

TokenGenerator
    generateToken(): string (use bin2hex(random_bytes(32)))

AuthService
    login(string $email, string $password): string
    register(string $email, string $password): User

Regras de negócio
    -Senha deve ser salva usando password_hash.
    -Login deve validar senha com password_verify.
    -Se login válido → retornar token.
    -Se inválido → lançar Exception.


RESOLUÇÃO: FLUXO 

- Register User meu AuthService 
-AuthService cria novo user na class User 
- Salva em um array 

Login: 
- Login 
- Vericia user pelo array 
- generateToken()
