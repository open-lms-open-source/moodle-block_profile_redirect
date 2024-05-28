<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @copyright  Copyright (c) 2024 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redirecionar perfil';
$string['blockname'] = 'Redirecionar perfil';
$string['description'] = 'Texto do link';
$string['descriptiontxt'] = '<p>O bloco Redirecionar perfil é projetado para redirecionar um usuário da página inicial do site ou da página Meu Moodle contendo o bloco para um novo curso. O novo curso para o qual o usuário é redirecionado baseia-se em um valor em um campo de perfil que corresponde a um valor no nome completo do curso, nome curto ou número de ID com base nas configurações do site abaixo.</p>

<p>Lembre-se de que, uma vez que as configurações do bloco são definidas, um administrador precisa adicionar uma instância do bloco à página inicial ou à página Meu Moodle. Para fazer isso, conclua as seguintes etapas:<ol>
<li>Navegue até a página inicial, habilite a edição e selecione Redirecionar perfil na lista suspensa do bloco "Adicionar um bloco".</li>
<li>Depois que o bloco for adicionado, todos os usuários serão redirecionados para o curso especificado em seu campo de perfil ou para o curso padrão se nenhum valor válido estiver em seu perfil.</li>
</ol>
</p>';
$string['profilefield'] = 'Campo do perfil';
$string['profilefielddesc'] = 'Esse é o campo no perfil de usuário que o bloco Redirecionar perfil usará para fazer a correspondência em relação ao campo do curso.';
$string['coursefield'] = 'Campo do curso';
$string['coursefielddesc'] = 'Esse é o campo nas configurações do curso que o bloco Redirecionar perfil usará fazer correspondência com o campo do perfil de usuário para redirecionamento.';
$string['defaultcourse'] = 'Curso padrão';
$string['defaultcoursedesc'] = 'Este é o curso para o qual todos os usuários não administradores serão direcionados após visualizar o bloco, caso eles não tenham um valor válido em seu campo do perfil. Esse campo deve ter o nome curto, o nome completo ou o número do ID do curso baseados no valor do menu suspenso do campo do curso';
$string['sysadmin'] = 'Esse bloco só é exibido para administradores de site';
$string['profile_redirect:addinstance'] = 'Adicionar um novo bloco de Redirecionamento do perfil';
$string['profile_redirect:myaddinstance'] = 'Adicionar uma instância de bloco de Redirecionamento do perfil para a minha página';
$string['privacy:metadata'] = 'O plug-in de Redirecionamento do perfil não armazena dados pessoais.';
