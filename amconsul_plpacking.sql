/*
Navicat MySQL Data Transfer

Source Server         : am
Source Server Version : 50505
Source Host           : amconsultores.com.pe:3306
Source Database       : amconsul_plpacking

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-08-25 20:16:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES ('1', 'Producción', '1', '2021-08-15 13:21:19', '2021-08-15 13:21:22');
INSERT INTO `areas` VALUES ('2', 'Administración', '1', '2021-08-15 13:22:00', '2021-08-15 13:22:04');
INSERT INTO `areas` VALUES ('3', 'Contabilidad', '1', '2021-08-15 13:22:17', '2021-08-15 13:22:20');
INSERT INTO `areas` VALUES ('4', 'Gerencia', '1', '2021-08-15 13:22:36', '2021-08-15 13:22:39');
INSERT INTO `areas` VALUES ('5', 'Almacén', '1', '2021-08-15 13:22:54', '2021-08-15 13:22:57');
INSERT INTO `areas` VALUES ('6', 'Invitado', '1', null, null);
INSERT INTO `areas` VALUES ('7', 'Cliente', '1', null, null);

-- ----------------------------
-- Table structure for cargos
-- ----------------------------
DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_areas_cargos` (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cargos
-- ----------------------------
INSERT INTO `cargos` VALUES ('1', '1', 'Supervisión', '1', null, null);
INSERT INTO `cargos` VALUES ('2', '1', 'Jefe de Planta', '1', null, null);
INSERT INTO `cargos` VALUES ('3', '2', 'Asistente', '1', null, null);
INSERT INTO `cargos` VALUES ('4', '2', 'Jefe de Administración', '1', null, null);
INSERT INTO `cargos` VALUES ('5', '3', 'Jefe de Contabilidad', '1', null, null);
INSERT INTO `cargos` VALUES ('6', '4', 'Gerente General', '1', null, null);
INSERT INTO `cargos` VALUES ('7', '5', 'Jefe de almacén', '1', null, null);
INSERT INTO `cargos` VALUES ('9', '3', 'Asistente', '1', null, null);
INSERT INTO `cargos` VALUES ('10', '5', 'Jefe de Planta', '1', null, null);

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_cliente` varchar(255) DEFAULT NULL,
  `tipo_nacionalidad` int(11) DEFAULT NULL,
  `tipo_cliente` int(11) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `rubros` varchar(255) DEFAULT NULL,
  `nombre_comercial` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `ruc_dni` varchar(255) DEFAULT NULL,
  `condicion_pago` int(11) DEFAULT NULL,
  `direccion_fiscal` varchar(255) DEFAULT NULL,
  `alerta_vencimiento` int(11) DEFAULT NULL,
  `evaluacion_cliente` int(11) DEFAULT NULL,
  `nombre_contacto` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `telefono_contacto` varchar(20) DEFAULT NULL,
  `email_contacto` varchar(255) DEFAULT NULL,
  `celular_contacto` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'A-1', '1', '1', 'AGRICOLA SAN MIGUEL DE PIURA', 'AGROINDUSTRIA', 'AGRICOLA SAN MIGUEL DE PIURA', 'AGROEXPORTADOR EXPARRAGOS', '20609865345', '15', 'AV. LOS FRUTALES 873, PIURA, PIURA', '15', '0', 'Camilo Lopez Perez', 'Gerente Administrativo', '017085643', 'cliente@agroexportador.com', '123456789', '1977-05-14', '2021-08-25 04:46:53', '2021-08-25 05:18:37');

-- ----------------------------
-- Table structure for marca_vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `marca_vehiculo`;
CREATE TABLE `marca_vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marca_vehiculo
-- ----------------------------
INSERT INTO `marca_vehiculo` VALUES ('1', 'marca 1', '2021-08-26 00:01:34', '2021-08-26 00:01:52');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('4', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('5', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('6', '2021_06_10_011509_create_permission_tables', '1');

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '1');
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '2');
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '3');
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '4');
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '5');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('ecasimiro@amconsultores.com.pe', 'T9KDOR7lj5TJxN9n49b9cb9gXC3F3FhiD3W2rYusUQxBsoQmHTeCzccRDZEbMWuk', '2021-08-23 16:13:59');

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'user.create', 'Crear Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('2', 'user.read', 'Ver Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('3', 'user.update', 'Actualizar Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('4', 'user.delete', 'Eliminar Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('5', 'user.list', 'Listar Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('6', 'user.profile.update', 'Actualizar un Usuario', 'user', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('7', 'role.create', 'Crear Rol', 'role', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('8', 'role.read', 'Ver Rol', 'role', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('9', 'role.update', 'Actualizar Rol', 'role', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('10', 'role.delete', 'Eliminar Rol', 'role', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('11', 'role.list', 'Listar Rol', 'role', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('12', 'permission.create', 'Crear Rol', 'permission', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('13', 'permission.read', 'Ver Rol', 'permission', 'web', '2021-07-28 20:11:20', '2021-07-28 20:11:20');
INSERT INTO `permissions` VALUES ('14', 'permission.update', 'Actualizar Rol', 'permission', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('15', 'permission.delete', 'Eliminar Rol', 'permission', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('16', 'permission.list', 'Listar Rol', 'permission', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('17', 'client.list', 'Listar Clientes', 'client', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('18', 'client.show', 'Ver Cliente', 'client', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('19', 'client.pedidos', 'Listar Pedidos', 'client', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('20', 'cobranza.list', 'Listar Cobranza', 'cobranza', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('21', 'cobranza.show', 'Ver Cobranza', 'cobranza', 'web', '2021-07-28 20:11:21', '2021-07-28 20:11:21');
INSERT INTO `permissions` VALUES ('22', 'client.create', 'Crear cliente', 'client', 'web', '2021-08-25 03:41:26', '2021-08-25 05:03:15');
INSERT INTO `permissions` VALUES ('23', 'client.update', 'Editar cliente', 'client', 'web', '2021-08-25 05:02:22', '2021-08-25 05:09:25');
INSERT INTO `permissions` VALUES ('24', 'almacen.list', 'Listado almacen', 'almacen', 'web', '2021-08-25 20:59:47', '2021-08-25 20:59:47');
INSERT INTO `permissions` VALUES ('25', 'proveedor.list', 'Listar', 'proveedor', 'web', '2021-08-25 22:55:02', '2021-08-25 22:55:02');
INSERT INTO `permissions` VALUES ('26', 'proveedor.create', 'Crear Proveedor', 'proveedor', 'web', '2021-08-25 23:07:08', '2021-08-25 23:08:38');
INSERT INTO `permissions` VALUES ('27', 'proveedor.update', 'Actualizar Proveedor', 'proveedor', 'web', '2021-08-25 23:14:33', '2021-08-25 23:14:33');
INSERT INTO `permissions` VALUES ('28', 'procedencia.list', 'Listar Procedencia', 'procedencia', 'web', '2021-08-25 23:29:54', '2021-08-25 23:29:54');
INSERT INTO `permissions` VALUES ('29', 'procedencia.create', 'Crear Procedencia', 'procedencia', 'web', '2021-08-25 23:30:18', '2021-08-25 23:30:18');
INSERT INTO `permissions` VALUES ('30', 'procedencia.update', 'Actualizar Procedencia', 'procedencia', 'web', '2021-08-25 23:30:49', '2021-08-25 23:30:49');
INSERT INTO `permissions` VALUES ('31', 'marcavehiculo.list', 'Listar', 'marcavehiculo', 'web', '2021-08-25 23:56:31', '2021-08-25 23:56:31');
INSERT INTO `permissions` VALUES ('32', 'marcavehiculo.create', 'Crear', 'marcavehiculo', 'web', '2021-08-25 23:56:57', '2021-08-25 23:56:57');
INSERT INTO `permissions` VALUES ('33', 'marcavehiculo.update', 'Actualizar', 'marcavehiculo', 'web', '2021-08-25 23:57:46', '2021-08-25 23:57:46');
INSERT INTO `permissions` VALUES ('34', 'tipovehiculo.list', 'Listar', 'tipovehiculo', 'web', '2021-08-26 00:11:54', '2021-08-26 00:11:54');
INSERT INTO `permissions` VALUES ('35', 'tipovehiculo.create', 'Crear', 'tipovehiculo', 'web', '2021-08-26 00:12:11', '2021-08-26 00:12:11');
INSERT INTO `permissions` VALUES ('36', 'tipovehiculo.update', 'Actualizar', 'tipovehiculo', 'web', '2021-08-26 00:12:29', '2021-08-26 00:12:29');

-- ----------------------------
-- Table structure for procedencias
-- ----------------------------
DROP TABLE IF EXISTS `procedencias`;
CREATE TABLE `procedencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of procedencias
-- ----------------------------
INSERT INTO `procedencias` VALUES ('1', 'Procedencia 1', '2021-08-25 23:38:38', '2021-08-25 23:39:46');
INSERT INTO `procedencias` VALUES ('2', 'Procedencia 2', '2021-08-25 23:40:07', '2021-08-25 23:40:07');

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', 'Proveedor 1', '2021-08-25 23:12:17', '2021-08-25 23:19:29');
INSERT INTO `proveedores` VALUES ('2', 'Proveedor 2', '2021-08-25 23:13:44', '2021-08-25 23:13:44');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES ('1', '1');
INSERT INTO `role_has_permissions` VALUES ('1', '4');
INSERT INTO `role_has_permissions` VALUES ('2', '1');
INSERT INTO `role_has_permissions` VALUES ('2', '4');
INSERT INTO `role_has_permissions` VALUES ('3', '1');
INSERT INTO `role_has_permissions` VALUES ('3', '4');
INSERT INTO `role_has_permissions` VALUES ('4', '1');
INSERT INTO `role_has_permissions` VALUES ('4', '4');
INSERT INTO `role_has_permissions` VALUES ('5', '1');
INSERT INTO `role_has_permissions` VALUES ('5', '4');
INSERT INTO `role_has_permissions` VALUES ('6', '1');
INSERT INTO `role_has_permissions` VALUES ('6', '4');
INSERT INTO `role_has_permissions` VALUES ('7', '1');
INSERT INTO `role_has_permissions` VALUES ('8', '1');
INSERT INTO `role_has_permissions` VALUES ('9', '1');
INSERT INTO `role_has_permissions` VALUES ('10', '1');
INSERT INTO `role_has_permissions` VALUES ('11', '1');
INSERT INTO `role_has_permissions` VALUES ('12', '1');
INSERT INTO `role_has_permissions` VALUES ('12', '2');
INSERT INTO `role_has_permissions` VALUES ('12', '3');
INSERT INTO `role_has_permissions` VALUES ('13', '1');
INSERT INTO `role_has_permissions` VALUES ('13', '2');
INSERT INTO `role_has_permissions` VALUES ('13', '3');
INSERT INTO `role_has_permissions` VALUES ('14', '1');
INSERT INTO `role_has_permissions` VALUES ('14', '2');
INSERT INTO `role_has_permissions` VALUES ('14', '3');
INSERT INTO `role_has_permissions` VALUES ('15', '1');
INSERT INTO `role_has_permissions` VALUES ('15', '2');
INSERT INTO `role_has_permissions` VALUES ('15', '3');
INSERT INTO `role_has_permissions` VALUES ('16', '1');
INSERT INTO `role_has_permissions` VALUES ('16', '2');
INSERT INTO `role_has_permissions` VALUES ('17', '1');
INSERT INTO `role_has_permissions` VALUES ('17', '2');
INSERT INTO `role_has_permissions` VALUES ('17', '3');
INSERT INTO `role_has_permissions` VALUES ('18', '1');
INSERT INTO `role_has_permissions` VALUES ('18', '2');
INSERT INTO `role_has_permissions` VALUES ('18', '3');
INSERT INTO `role_has_permissions` VALUES ('19', '1');
INSERT INTO `role_has_permissions` VALUES ('19', '3');
INSERT INTO `role_has_permissions` VALUES ('20', '1');
INSERT INTO `role_has_permissions` VALUES ('20', '2');
INSERT INTO `role_has_permissions` VALUES ('20', '3');
INSERT INTO `role_has_permissions` VALUES ('21', '1');
INSERT INTO `role_has_permissions` VALUES ('21', '2');
INSERT INTO `role_has_permissions` VALUES ('21', '3');
INSERT INTO `role_has_permissions` VALUES ('22', '1');
INSERT INTO `role_has_permissions` VALUES ('23', '1');
INSERT INTO `role_has_permissions` VALUES ('24', '1');
INSERT INTO `role_has_permissions` VALUES ('25', '1');
INSERT INTO `role_has_permissions` VALUES ('26', '1');
INSERT INTO `role_has_permissions` VALUES ('27', '1');
INSERT INTO `role_has_permissions` VALUES ('28', '1');
INSERT INTO `role_has_permissions` VALUES ('29', '1');
INSERT INTO `role_has_permissions` VALUES ('30', '1');
INSERT INTO `role_has_permissions` VALUES ('31', '1');
INSERT INTO `role_has_permissions` VALUES ('32', '1');
INSERT INTO `role_has_permissions` VALUES ('33', '1');
INSERT INTO `role_has_permissions` VALUES ('34', '1');
INSERT INTO `role_has_permissions` VALUES ('35', '1');
INSERT INTO `role_has_permissions` VALUES ('36', '1');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Administrador', 'Administrador principal', 'web', '2021-07-28 20:11:21', '2021-08-23 20:59:20');
INSERT INTO `roles` VALUES ('2', 'Administrador 2', null, 'web', '2021-08-18 16:05:27', '2021-08-18 16:05:27');
INSERT INTO `roles` VALUES ('3', 'Estándar', null, 'web', '2021-08-18 16:06:05', '2021-08-18 16:06:05');
INSERT INTO `roles` VALUES ('4', 'Estándar 2', null, 'web', '2021-08-18 16:06:29', '2021-08-18 16:06:29');

-- ----------------------------
-- Table structure for tipo_vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `tipo_vehiculo`;
CREATE TABLE `tipo_vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipo_vehiculo
-- ----------------------------
INSERT INTO `tipo_vehiculo` VALUES ('1', 'Camión', '2021-08-26 00:14:26', '2021-08-26 00:14:43');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zona` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', '3', 'Admin', null, '1', 'ecasimiro@amconsultores.com.pe', 'Edwuin Casimiro', '10676542', '$2y$10$M8m0ivL.uoOYaihtOif3w.J5RBtwBtXYtWIcE0VecVtNgVnJksOya', '1', null, 'profile_usuario/Ltzdw1eIHbDD191Xb2RhUvePD9VL4MfyJKb6lP50.png', '2021-07-28 20:11:22', '2021-08-23 18:01:38');
INSERT INTO `users` VALUES ('2', '1', '1', 'Edwuin Casimiro Calle', '987654323', '1', 'ejemplo@gmailcom', 'admin', '12345678', '$2y$10$R3PSawQm3CMRsHNQeqV/OeQ5YhMKt.UsZJr9mRApdN7wWTqWgjdF.', '1', null, 'profile_usuario/PzVbiFIGLWx6uWawzXn0u71IVfr2aUCmrcVPZg5o.jpg', '2021-08-04 15:19:27', '2021-08-24 04:14:36');
INSERT INTO `users` VALUES ('3', '5', '4', 'Admin', '123', null, 'admin@test.com', 'test1', null, '$2y$10$.oZv6OfPtAPNzyR.QndQQutw4Kv/mYo60LpvxrOOMLA4LliM3F1Fm', '1', null, null, '2021-08-15 19:17:50', '2021-08-15 19:17:50');
INSERT INTO `users` VALUES ('4', '5', '8', 'dev', '123', null, 'gabrieljg242@gmail.com', 'dev', '123', '$2y$10$dPRwlWyVVO8X6fiqgG0mHehigrYaxwGFl2GqdOiakQi2/6wrbTiHa', '1', null, 'profile_usuario/YkTS3J9tLv54DUxwgnyYW5k3dAERIDdZrJGK7AVN.png', '2021-08-20 12:44:53', '2021-08-22 19:17:14');
INSERT INTO `users` VALUES ('5', '4', '6', 'Edwuin 2', null, null, null, 'ecasimiro@amconsultores.com.pe', null, '$2y$10$TpPpJ11BDJdaENYbXOjJXeAcnC1p6MZSyx1.IJxwdgYWPRsuLvxty', '1', null, 'profile_usuario/ZIMUWZLiEI6UsA9Z0B1PsU03ukdMJyq62lIAgydx.jpg', '2021-08-23 20:42:00', '2021-08-23 20:42:01');
