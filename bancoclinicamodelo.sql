SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `consulta` (
  `codConsulta` int(11) NOT NULL,
  `dataConsulta` date NOT NULL,
  `codPaciente` int(11) NOT NULL,
  `crmMedico` int(11) NOT NULL,
  `descricaoConsulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `exame` (
  `tipoExame` int(11) NOT NULL,
  `descricaoExame` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `medicamento` (
  `cod_medicamento` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `medico` (
  `CRM` int(10) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `DataNasc` date NOT NULL,
  `Especialidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `paciente` (
  `CPF` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Convenio` varchar(100) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `DataNasc` date NOT NULL,
  `TipoSanguineo` varchar(4) NOT NULL,
  `CodPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `prescricao` (
  `codPrescricao` int(11) NOT NULL,
  `codConsulta` int(11) NOT NULL,
  `codMedicamento` int(11) DEFAULT NULL,
  `codExame` int(11) DEFAULT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `consulta`
  ADD PRIMARY KEY (`codConsulta`),
  ADD UNIQUE KEY `codPaciente` (`codPaciente`),
  ADD UNIQUE KEY `crmMedico` (`crmMedico`);

ALTER TABLE `exame`
  ADD PRIMARY KEY (`tipoExame`);

ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`cod_medicamento`);

ALTER TABLE `medico`
  ADD PRIMARY KEY (`CRM`);

ALTER TABLE `paciente`
  ADD PRIMARY KEY (`CodPaciente`);

ALTER TABLE `prescricao`
  ADD PRIMARY KEY (`codPrescricao`),
  ADD UNIQUE KEY `codConsulta` (`codConsulta`),
  ADD UNIQUE KEY `codMedicamento` (`codMedicamento`),
  ADD UNIQUE KEY `codExame` (`codExame`);


ALTER TABLE `medicamento`
  MODIFY `cod_medicamento` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `prescricao`
  MODIFY `codPrescricao` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `consulta`
  ADD CONSTRAINT `FK_MEDICO` FOREIGN KEY (`crmMedico`) REFERENCES `medico` (`CRM`),
  ADD CONSTRAINT `FK_PACIENTE` FOREIGN KEY (`codPaciente`) REFERENCES `paciente` (`CodPaciente`);

ALTER TABLE `prescricao`
  ADD CONSTRAINT `FK_CONSULTA` FOREIGN KEY (`codConsulta`) REFERENCES `consulta` (`codConsulta`),
  ADD CONSTRAINT `FK_EXAME` FOREIGN KEY (`codExame`) REFERENCES `exame` (`tipoExame`),
  ADD CONSTRAINT `FK_MEDICAMENTO` FOREIGN KEY (`codMedicamento`) REFERENCES `medicamento` (`cod_medicamento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
