

CREATE SCHEMA aplicacao AUTHORIZATION postgres;
 
SET search_path TO aplicacao;

CREATE TABLE usuario
(
  id_usuario integer NOT NULL DEFAULT nextval('aplicacao.usuario_id_seq'::regclass),
  email character varying(255) NOT NULL,
  senha character varying(255) NOT NULL,
  created timestamp without time zone,
  modified timestamp without time zone,
  CONSTRAINT users_pkey PRIMARY KEY (id)
)