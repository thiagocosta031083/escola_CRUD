/*mysql -u root -p*/
/*USE escola_a30;*/


/*#MySQL -u root -p*/

<!--Para fazer comentário no HTML (quando fica entre <html </html>, coloca "<!-- -->" -->

/*Para baixar um projeto do git hub basta fazer o seguinte procedimento
a) No git hub tem que copiar o endereço do repositório
b) no git bash navegar até o htdocs - Para navegar até o htdocs faça o seguinte:
1 - $ cd
2 - $ cd xamp
3 - $ cd htdocs

c) Usar o comando git clone e colar
4 - $ git clone e colar o endereço

/

/*Criação do Banco de Dados com o nome escola_a30*/
CREATE DATABASE escola_a30;
USE escola_a30;

/*Criação das tabelas*/
CREATE TABLE bairro(
    cod_bairro INT AUTO_INCREMENT,
    nome_bairro VARCHAR(45),
    PRIMARY KEY(cod_bairro)
);

/*Criar uma tabela de usuário com os campos usuário, e-mail e senha*/
CREATE TABLE usuario(
id_usuario INT AUTO_INCREMENT,
usuario VARCHAR(45),	
email VARCHAR(75),
bairro INT,	
senha VARCHAR(6),
FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro),	
PRIMARY KEY (id_usuario)	
);

CREATE TABLE turma(
    num_turma INT AUTO_INCREMENT,
    professor_turma VARCHAR(45),
    curso_turma INT,
    PRIMARY KEY(num_turma),
    FOREIGN KEY(curso_turma) REFERENCES curso(cod_curso)    
);

CREATE TABLE professor(
    cod_professor INT AUTO_INCREMENT,
    nome_professor VARCHAR(45),
    bairro INT,
    FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro),
    PRIMARY KEY(cod_professor)
);

CREATE TABLE disciplina(
    cod_disciplina INT AUTO_INCREMENT,
    nome_disciplina VARCHAR(45),
    PRIMARY KEY(cod_disciplina)
);

CREATE TABLE curso(
    cod_curso INT AUTO_INCREMENT,
    nome_curso VARCHAR(45),
    PRIMARY KEY(cod_curso)
);

CREATE TABLE curso_tem_disciplina(
    curso INT,
    disciplina INT,
    FOREIGN KEY(curso) REFERENCES curso(cod_curso),
    FOREIGN KEY(disciplina) REFERENCES disciplina(cod_disciplina)    
);

CREATE TABLE aluno(
    matricula INT AUTO_INCREMENT,
    nome_aluno VARCHAR(90),
    bairro_aluno INT,
    turma_aluno INT,
    PRIMARY KEY(matricula),
    FOREIGN KEY(bairro_aluno) REFERENCES bairro(cod_bairro),
    FOREIGN KEY(turma_aluno) REFERENCES turma(num_turma)
);

INSERT INTO bairro(nome_bairro) VALUES ("Alagoinha"),("Asa Sul"),("Asa Norte"),("Lago Sul"),("Lago Norte");

INSERT INTO disciplina(nome_disciplina) VALUES ("HTML"),("CSS"),("Javascript"),("PHP"),("MySQL"),("Java SE"),("Java EE");

INSERT INTO curso(nome_curso) VALUES ("Web design"),("Frontend"),("Backend"),("Web developer"),("DBA"),("Programção");

INSERT INTO professor(nome_professor,bairro) VALUES ("Gembala",2),("Trombolinha",1),("Felix",2),("Tom",3),("Frajola",4);

INSERT INTO usuario(usuario,email,bairro,senha) VALUES ("Bruce","bruce@ml5w3s",2,"12345"),("Bruce","bruce@ml5w3s",1,"12345"),("Bruce","bruce@ml5w3s",2,"12345"),("Bruce","bruce@ml5w3s",3,"12345"),("Bruce","bruce@ml5w3s",4,"12345");

ALTER TABLE professor ADD bairro INT;

ALTER TABLE professor ADD FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro);


/*Selecionar a senha do usuário Crirstna na tabela de usuários*/
SELECT senha FROM usuario WHERE usuario = 'Cristina';

/*Seleciona o nome do professor da tabela de professor*/
SELECT nome_professor FROM professor;
/*adiciona o campro bairro na tabela de usuário, com o tipo int */
ALTER TABLE usuario ADD bairro INT;

/*altera o campo usuário para chave estrangeira associado a chave primaria da tabela de bairro */
ALTER TABLE usuario ADD FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro);

SELECT u.usuario, b.nome_bairro FROM usuario u INNER JOIN bairro b ON u.bairro = b.cod_bairro;

SELECT * FROM curso ORDER BY cod_curso DESC LIMIT 1;

/*INNER JOIN serve para trazer informações de consulta em várias tabelas  */
SELECT nome_curso, nome_disciplina FROM curso
INNER JOIN curso_tem_disciplina ON cod_curso=curso
INNER JOIN disciplina ON disciplina=cod_disciplina; 

/*Cuidado com esse comando - Ele deleta toda a tabela do banco de dados*/
DELETE FROM curso_tem_disciplina;
DELETE FROM disciplina;
DELETE FROM curso;

ALTER TABLE turma MODIFY professor_turma INT;
ALTER TABLE turma ADD FOREIGN KEY (professor_turma) REFERENCES professor(cod_professor);

UPDATE aluno set bairro_aluno=22 WHERE matricula=1