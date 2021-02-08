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
 * @copyright  Copyright (c) 2021 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redirecionar perfil';
$string['blockname'] = 'Redirecionar perfil';
$string['description'] = 'Texto do link';
$string['descriptiontxt'] = '<p>O bloco de redirecionamento do perfil foi desenvolvido para redirecionar um usuário da página inicial do site ou minha página do Moodle. O bloco é carregado em um novo curso. O novo curso para o qual o usuário é redirecionado baseia-se em um valor de campo do perfil que corresponde ao valor no nome completo de curso, nome curto ou número de código baseado nas configurações de site abaixo.</p>

<p>Lembre-se de que, depois que as configurações de bloco são definidas, um administrador precisa adicionar uma instância do bloco para a página inicial ou minha página Moodle. Para fazer isso, siga as seguintes etapas:
<ol>
<li>Navegue para a página inicial, ative a edição, selecione Redirecionar perfil da lista suspensa \\"Blocos\\".</li>
<li>Depois que o bloco é adicionado, todos os usuários serão direcionados para o curso especificado em seu campo do perfil ou ao curso padrão caso nenhum valor válido esteja em seu perfil.</li>
</ol>
</p>';
$string['profilefield'] = 'Campo do perfil';
$string['profilefielddesc'] = 'Esse é o campo no perfil de usuário que o bloco de redirecionamento do perfil usará para combinar em relação ao campo de curso.';
$string['coursefield'] = 'Campo do curso';
$string['coursefielddesc'] = 'Esse é o campo nas configurações de curso que o bloco de redirecionamento de curso usará para combinar com o campo do perfil de usuário para redirecionamento.';
$string['defaultcourse'] = 'Curso padrão';
$string['defaultcoursedesc'] = 'Este é o curso para o qual todos os usuários não administrativos serão direcionados após visualizar o bloco, caso eles não tenham um valor válido em seu campo do perfil. Esse campo deve ter o nome curto, o nome completo ou o número de código do curso baseados no valor do menu suspenso de campo do curso';
$string['sysadmin'] = 'Esse bloco só é exibido para administradores de site';
$string['profile_redirect:addinstance'] = 'Adicionar um novo bloco de Redirecionamento do perfil';
$string['profile_redirect:myaddinstance'] = 'Adicionar uma instância de bloco de Redirecionamento do perfil para a minha página';
$string['privacy:metadata'] = 'O plug-in de Redirecionamento do perfil não armazena dados pessoais.';
