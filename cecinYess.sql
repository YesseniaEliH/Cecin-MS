CREATE TABLE T_alumno (
	codalu VARCHAR ( 10 ) NOT NULL,
	tipodoc CHAR ( 1 ) NOT NULL,
	nrodoc INTEGER NOT NULL,
	nomalu VARCHAR ( 50 ) NOT NULL,
	appalu VARCHAR ( 100 ) NOT NULL,
	apmalu VARCHAR ( 100 ) NOT NULL,
	telalu INTEGER NOT NULL,
	correo VARCHAR ( 100 ) NOT NULL,
	CONSTRAINT PK_T_alumno PRIMARY KEY (codalu)
	);
CREATE TABLE T_concepto (
	codcon VARCHAR ( 10 ) NOT NULL,
	descon VARCHAR ( 300 ) NOT NULL,
	monto FLOAT ( 10 ),
	CONSTRAINT PK_T_concepto PRIMARY KEY (codcon)
	);
CREATE TABLE T_horario (
	codhor VARCHAR ( 10 ) NOT NULL,
	deshor VARCHAR ( 100 ) NOT NULL,
	CONSTRAINT PK_T_horario PRIMARY KEY (codhor)
	);
CREATE TABLE T_certificado (
	idcer VARCHAR ( 10 ) NOT NULL,
	nombre VARCHAR ( 100 ) NOT NULL,
	estado CHAR ( 1 ) NOT NULL,
	codmat VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_certificado PRIMARY KEY (codmat, idcer)
	);
CREATE TABLE T_modulo (
	codmod VARCHAR ( 10 ) NOT NULL,
	nommod VARCHAR ( 100 ) NOT NULL,
	CONSTRAINT PK_T_modulo PRIMARY KEY (codmod)
	);
CREATE TABLE T_asisalu (
	asis VARCHAR ( 1 ) NOT NULL,
	T_asisalu_ID VARCHAR ( 1 ) NOT NULL,
	codpf VARCHAR ( 1 ) NOT NULL,
	codprog SMALLINT NOT NULL,
	codmat VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_asisalu PRIMARY KEY (codprog, codpf, codmat, T_asisalu_ID)
	);
CREATE INDEX TC_T_asisalu65 ON T_asisalu (codpf );
CREATE TABLE T_pfechaasis (
	codpf VARCHAR ( 10 ) NOT NULL,
	fecdf DATE NOT NULL,
	hinidf TIME  NOT NULL,
	hfindf TIME  NOT NULL,
	asisdoc VARCHAR ( 100 ) NOT NULL,
	codprog VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_pfechaasis PRIMARY KEY (codprog, codpf)
	);
CREATE INDEX TC_T_pfechaasis64 ON T_pfechaasis (codprog );
CREATE TABLE T_programacion (
	codprog VARCHAR ( 10 ) NOT NULL,
	fini DATE NOT NULL,
	ffin DATE NOT NULL,
	costo FLOAT ( 10 ) NOT NULL,
	estprog VARCHAR ( 1 ) NOT NULL,
	coddoc VARCHAR ( 10 ) NOT NULL,
	codhor VARCHAR ( 10 ) NOT NULL,
	codcur VARCHAR ( 10 ) NOT NULL,
	codlab VARCHAR ( 10 ) NOT NULL,
	codmod VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_programacion PRIMARY KEY (codprog)
	);
CREATE INDEX TC_T_programacion59 ON T_programacion (codcur );
CREATE INDEX TC_T_programacion60 ON T_programacion (coddoc );
CREATE INDEX TC_T_programacion61 ON T_programacion (codlab );
CREATE INDEX TC_T_programacion58 ON T_programacion (codhor );
CREATE TABLE T_docente (
	coddoc VARCHAR ( 10 ) NOT NULL,
	tipodocd CHAR ( 1 ) NOT NULL,
	nrodocd INTEGER NOT NULL,
	nomdoc VARCHAR ( 50 ) NOT NULL,
	appdoc VARCHAR ( 100 ) NOT NULL,
	apmdoc VARCHAR ( 100 ) NOT NULL,
	teldoc INTEGER NOT NULL,
	direcdoc VARCHAR ( 150 ) NOT NULL,
	CONSTRAINT PK_T_docente PRIMARY KEY (coddoc)
	);
CREATE TABLE T_curso (
	codcur VARCHAR ( 10 ) NOT NULL,
	nomcur VARCHAR ( 150 ) NOT NULL,
	codmod VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_curso PRIMARY KEY (codmod, codcur)
	);
CREATE TABLE T_usuario (
	codusu VARCHAR ( 10 ) NOT NULL,
	nomusu VARCHAR ( 50 ) NOT NULL,
	passusu VARCHAR ( 50 ) NOT NULL,
	tipousu VARCHAR ( 50 ) NULL,
	CONSTRAINT PK_T_usuario PRIMARY KEY (codusu)
);
CREATE INDEX TC_T_curso53 ON T_curso (codmod );
CREATE TABLE T_matricula (
	codmat VARCHAR ( 10 ) NOT NULL,
	pago VARCHAR ( 10 ) NOT NULL,
	nota1 INTEGER NOT NULL,
	nota2 INTEGER NOT NULL,
	nota3 INTEGER NOT NULL,
	promf FLOAT ( 10 ) NOT NULL,
	entremod CHAR ( 1 ) NOT NULL,
	codalu VARCHAR ( 10 ) NOT NULL,
	codprog VARCHAR ( 10 ) NOT NULL,
	documeing VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_matricula PRIMARY KEY (codmat)
	);
CREATE INDEX TC_T_matricula62 ON T_matricula (codprog );
CREATE INDEX TC_T_matricula63 ON T_matricula (codalu );
CREATE TABLE T_dhorario (
	coddh VARCHAR ( 10 ) NOT NULL,
	diadh DATE NOT NULL,
	hinidh TIME NOT NULL,
	hfindh TIME NOT NULL,
	codhor VARCHAR ( 1 ) NOT NULL,
	CONSTRAINT PK_T_dhorario PRIMARY KEY (codhor, coddh)
	);
CREATE INDEX TC_T_dhorario52 ON T_dhorario (codhor );
CREATE TABLE T_laboratorio (
	codlab VARCHAR ( 10 ) NOT NULL,
	nomlab VARCHAR ( 100 ) NOT NULL,
	ubilab VARCHAR ( 100 ) NOT NULL,
	caplab INTEGER NOT NULL,
	CONSTRAINT PK_T_laboratorio PRIMARY KEY (codlab)
	);
CREATE TABLE T_historicoing (
	idh VARCHAR ( 10 ) NOT NULL,
	nromov INTEGER NOT NULL,
	monini FLOAT ( 10 ) NOT NULL,
	monfin FLOAT ( 10 ) NOT NULL,
	pc VARCHAR ( 100 ) NOT NULL,
	hora TIME NOT NULL,
	usuario VARCHAR ( 100 ) NOT NULL,
	codcon VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT PK_T_historicoing PRIMARY KEY (codcon, idh)
	);
CREATE INDEX TC_T_historicoing57 ON T_historicoing (codcon );
CREATE TABLE T_docingresos (
	tipdoc CHAR ( 1 ) NOT NULL,
	serdoc INTEGER NOT NULL,
	nrodoc INTEGER NOT NULL,
	mondoc FLOAT ( 10 ) NOT NULL,
	estdoc CHAR ( 1 ) NOT NULL,
	codalu VARCHAR ( 10 ) NOT NULL,
	codcon VARCHAR ( 10 ) NOT NULL,
	codmat VARCHAR ( 10 ) NOT NULL,
	CONSTRAINT TC_T_docingresos67 UNIQUE (codmat),
	CONSTRAINT PK_T_docingresos PRIMARY KEY (codcon, codmat, codalu, tipdoc, serdoc, nrodoc)
	);
CREATE INDEX TC_T_docingresos54 ON T_docingresos (codalu );
CREATE INDEX TC_T_docingresos56 ON T_docingresos (codcon );
ALTER TABLE T_historicoing ADD CONSTRAINT FK_T_historicoingconcepto FOREIGN KEY (codcon) REFERENCES T_concepto (codcon)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_matricula ADD CONSTRAINT FK_T_matriculaalumno FOREIGN KEY (codalu) REFERENCES T_alumno (codalu)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_matricula ADD CONSTRAINT FK_T_matriculaprog FOREIGN KEY (codprog) REFERENCES T_programacion (codprog)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_pfechaasis ADD CONSTRAINT FK_T_pfechaasisprogramacion FOREIGN KEY (codprog) REFERENCES T_programacion (codprog)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_programacion ADD CONSTRAINT FK_T_programacioncurso FOREIGN KEY (codmod, codcur) REFERENCES T_curso (codmod, codcur)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_programacion ADD CONSTRAINT FK_T_programacionlaboratorio FOREIGN KEY (codlab) REFERENCES T_laboratorio (codlab)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_programacion ADD CONSTRAINT FK_T_programacionhorario FOREIGN KEY (codhor) REFERENCES T_horario (codhor)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_programacion ADD CONSTRAINT FK_T_programaciondocente FOREIGN KEY (coddoc) REFERENCES T_docente (coddoc)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_certificado ADD CONSTRAINT FK_T_certificadomatricula FOREIGN KEY (codmat) REFERENCES T_matricula (codmat)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_dhorario ADD CONSTRAINT FK_T_dhorariohorario FOREIGN KEY (codhor) REFERENCES T_horario (codhor)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_curso ADD CONSTRAINT FK_T_cursomodulo FOREIGN KEY (codmod) REFERENCES T_modulo (codmod)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_docingresos ADD CONSTRAINT FK_T_docingresosmatricula FOREIGN KEY (codmat) REFERENCES T_matricula (codmat)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_docingresos ADD CONSTRAINT FK_T_docingresosalumno FOREIGN KEY (codalu) REFERENCES T_alumno (codalu)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_docingresos ADD CONSTRAINT FK_T_docingresosconcepto FOREIGN KEY (codcon) REFERENCES T_concepto (codcon)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_asisalu ADD CONSTRAINT FK_T_asisalu_matricula FOREIGN KEY (codmat) REFERENCES T_matricula (codmat)  ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE T_asisalu ADD CONSTRAINT FK_T_asisalu_pf FOREIGN KEY (codprog, codpf) REFERENCES T_pfechaasis (codprog, codpf)  ON DELETE NO ACTION ON UPDATE NO ACTION;

