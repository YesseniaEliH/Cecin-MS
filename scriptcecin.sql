USE [cecin]
GO
/****** Object:  Table [dbo].[T_alumno]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_alumno](
	[codalu] [varchar](10) NOT NULL,
	[tipodoc] [char](1) NOT NULL,
	[nrodoc] [int] NOT NULL,
	[nomalu] [varchar](50) NOT NULL,
	[appalu] [varchar](100) NOT NULL,
	[apmalu] [varchar](100) NOT NULL,
	[telalu] [int] NOT NULL,
	[correo] [varchar](100) NOT NULL,
 CONSTRAINT [PK_T_alumno] PRIMARY KEY CLUSTERED 
(
	[codalu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_asisalu]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_asisalu](
	[asis] [varchar](1) NOT NULL,
	[T_asisalu_ID] [varchar](1) NOT NULL,
	[codpf] [varchar](1) NOT NULL,
	[codprog] [smallint] NOT NULL,
	[codmat] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_asisalu] PRIMARY KEY CLUSTERED 
(
	[codprog] ASC,
	[codpf] ASC,
	[codmat] ASC,
	[T_asisalu_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_certificado]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_certificado](
	[idcer] [varchar](10) NOT NULL,
	[nombre] [varchar](100) NOT NULL,
	[estado] [char](1) NOT NULL,
	[codmat] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_certificado] PRIMARY KEY CLUSTERED 
(
	[codmat] ASC,
	[idcer] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_concepto]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_concepto](
	[codcon] [varchar](10) NOT NULL,
	[descon] [varchar](300) NOT NULL,
	[monto] [real] NULL,
 CONSTRAINT [PK_T_concepto] PRIMARY KEY CLUSTERED 
(
	[codcon] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_curso]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_curso](
	[codcur] [varchar](10) NOT NULL,
	[nomcur] [varchar](150) NOT NULL,
	[codmod] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_curso] PRIMARY KEY CLUSTERED 
(
	[codmod] ASC,
	[codcur] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_dhorario]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_dhorario](
	[coddh] [varchar](10) NOT NULL,
	[diadh] [varchar](50) NOT NULL,
	[hinidh] [time](7) NOT NULL,
	[hfindh] [time](7) NOT NULL,
	[codhor] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_dhorario] PRIMARY KEY CLUSTERED 
(
	[codhor] ASC,
	[coddh] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_docente]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_docente](
	[coddoc] [varchar](10) NOT NULL,
	[tipodocd] [char](1) NOT NULL,
	[nrodocd] [int] NOT NULL,
	[nomdoc] [varchar](50) NOT NULL,
	[appdoc] [varchar](100) NOT NULL,
	[apmdoc] [varchar](100) NOT NULL,
	[teldoc] [int] NOT NULL,
	[direcdoc] [varchar](150) NOT NULL,
 CONSTRAINT [PK_T_docente] PRIMARY KEY CLUSTERED 
(
	[coddoc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_docingresos]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_docingresos](
	[tipdoc] [char](1) NOT NULL,
	[serdoc] [int] NOT NULL,
	[nrodoc] [int] NOT NULL,
	[fechadoc] [date] NOT NULL,
	[mondoc] [real] NOT NULL,
	[estdoc] [char](1) NOT NULL,
	[codalu] [varchar](10) NOT NULL,
	[codcon] [varchar](10) NOT NULL
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_historicoing]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_historicoing](
	[idh] [varchar](10) NOT NULL,
	[nromov] [int] NOT NULL,
	[monini] [real] NOT NULL,
	[monfin] [real] NOT NULL,
	[pc] [varchar](100) NOT NULL,
	[hora] [time](7) NOT NULL,
	[usuario] [varchar](100) NOT NULL,
	[codcon] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_historicoing] PRIMARY KEY CLUSTERED 
(
	[codcon] ASC,
	[idh] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_horario]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_horario](
	[codhor] [varchar](10) NOT NULL,
	[deshor] [varchar](100) NOT NULL,
 CONSTRAINT [PK_T_horario] PRIMARY KEY CLUSTERED 
(
	[codhor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_laboratorio]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_laboratorio](
	[codlab] [varchar](10) NOT NULL,
	[nomlab] [varchar](100) NOT NULL,
	[ubilab] [varchar](100) NOT NULL,
	[caplab] [int] NOT NULL,
 CONSTRAINT [PK_T_laboratorio] PRIMARY KEY CLUSTERED 
(
	[codlab] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_matricula]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_matricula](
	[codmat] [varchar](10) NOT NULL,
	[nota1] [int] NOT NULL,
	[nota2] [int] NOT NULL,
	[nota3] [int] NOT NULL,
	[promf] [real] NOT NULL,
	[entremod] [char](1) NOT NULL,
	[codalu] [varchar](10) NOT NULL,
	[codprog] [varchar](10) NOT NULL,
	[tipodoc] [char](1) NULL,
	[serdoc] [int] NULL,
	[numdoc] [int] NULL,
 CONSTRAINT [PK_T_matricula] PRIMARY KEY CLUSTERED 
(
	[codmat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_modulo]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_modulo](
	[codmod] [varchar](10) NOT NULL,
	[nommod] [varchar](100) NOT NULL,
 CONSTRAINT [PK_T_modulo] PRIMARY KEY CLUSTERED 
(
	[codmod] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_pfechaasis]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_pfechaasis](
	[codpf] [varchar](10) NOT NULL,
	[fecdf] [date] NOT NULL,
	[hinidf] [time](7) NOT NULL,
	[hfindf] [time](7) NOT NULL,
	[asisdoc] [varchar](100) NOT NULL,
	[codprog] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_pfechaasis] PRIMARY KEY CLUSTERED 
(
	[codprog] ASC,
	[codpf] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_programacion]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_programacion](
	[codprog] [varchar](10) NOT NULL,
	[fini] [date] NOT NULL,
	[ffin] [date] NOT NULL,
	[costo] [real] NOT NULL,
	[estprog] [varchar](1) NOT NULL,
	[coddoc] [varchar](10) NOT NULL,
	[codhor] [varchar](10) NOT NULL,
	[codcur] [varchar](10) NOT NULL,
	[codlab] [varchar](10) NOT NULL,
	[codmod] [varchar](10) NOT NULL,
 CONSTRAINT [PK_T_programacion] PRIMARY KEY CLUSTERED 
(
	[codprog] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[T_usuario]    Script Date: 26/07/2018 17:22:05 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[T_usuario](
	[codusu] [varchar](10) NOT NULL,
	[nomusu] [varchar](50) NOT NULL,
	[passusu] [varchar](50) NOT NULL,
	[tipousu] [varchar](50) NULL,
 CONSTRAINT [PK_T_usuario] PRIMARY KEY CLUSTERED 
(
	[codusu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
ALTER TABLE [dbo].[T_certificado]  WITH CHECK ADD  CONSTRAINT [FK_T_certificadomatricula] FOREIGN KEY([codmat])
REFERENCES [dbo].[T_matricula] ([codmat])
GO
ALTER TABLE [dbo].[T_certificado] CHECK CONSTRAINT [FK_T_certificadomatricula]
GO
ALTER TABLE [dbo].[T_historicoing]  WITH CHECK ADD  CONSTRAINT [FK_T_historicoingconcepto] FOREIGN KEY([codcon])
REFERENCES [dbo].[T_concepto] ([codcon])
GO
ALTER TABLE [dbo].[T_historicoing] CHECK CONSTRAINT [FK_T_historicoingconcepto]
GO
ALTER TABLE [dbo].[T_matricula]  WITH CHECK ADD  CONSTRAINT [FK_T_matriculaalumno] FOREIGN KEY([codalu])
REFERENCES [dbo].[T_alumno] ([codalu])
GO
ALTER TABLE [dbo].[T_matricula] CHECK CONSTRAINT [FK_T_matriculaalumno]
GO
ALTER TABLE [dbo].[T_matricula]  WITH CHECK ADD  CONSTRAINT [FK_T_matriculaprog] FOREIGN KEY([codprog])
REFERENCES [dbo].[T_programacion] ([codprog])
GO
ALTER TABLE [dbo].[T_matricula] CHECK CONSTRAINT [FK_T_matriculaprog]
GO
ALTER TABLE [dbo].[T_pfechaasis]  WITH CHECK ADD  CONSTRAINT [FK_T_pfechaasisprogramacion] FOREIGN KEY([codprog])
REFERENCES [dbo].[T_programacion] ([codprog])
GO
ALTER TABLE [dbo].[T_pfechaasis] CHECK CONSTRAINT [FK_T_pfechaasisprogramacion]
GO
ALTER TABLE [dbo].[T_programacion]  WITH CHECK ADD  CONSTRAINT [FK_T_programacioncurso] FOREIGN KEY([codmod], [codcur])
REFERENCES [dbo].[T_curso] ([codmod], [codcur])
GO
ALTER TABLE [dbo].[T_programacion] CHECK CONSTRAINT [FK_T_programacioncurso]
GO
ALTER TABLE [dbo].[T_programacion]  WITH CHECK ADD  CONSTRAINT [FK_T_programaciondocente] FOREIGN KEY([coddoc])
REFERENCES [dbo].[T_docente] ([coddoc])
GO
ALTER TABLE [dbo].[T_programacion] CHECK CONSTRAINT [FK_T_programaciondocente]
GO
ALTER TABLE [dbo].[T_programacion]  WITH CHECK ADD  CONSTRAINT [FK_T_programacionhorario] FOREIGN KEY([codhor])
REFERENCES [dbo].[T_horario] ([codhor])
GO
ALTER TABLE [dbo].[T_programacion] CHECK CONSTRAINT [FK_T_programacionhorario]
GO
ALTER TABLE [dbo].[T_programacion]  WITH CHECK ADD  CONSTRAINT [FK_T_programacionlaboratorio] FOREIGN KEY([codlab])
REFERENCES [dbo].[T_laboratorio] ([codlab])
GO
ALTER TABLE [dbo].[T_programacion] CHECK CONSTRAINT [FK_T_programacionlaboratorio]
GO
