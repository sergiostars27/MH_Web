
create table monster(
	MonsterId int NOT NULL PRIMARY KEY IDENTITY(0,1),
	MonsterName varchar(20) NOT NULL,
	MonsterIcon varchar(50) NOT NULL,
	Carves int NOT NULL,
)

create table part(
	PartId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	PartName varchar(50)
)

create table maps(
	MapId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	MapName varchar(20) NOT NULL,
	MapIcon varchar(50) NOT NULL,
)

create table weapons(
	WeaponId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	WaponDamage int NOT NULL,
	WeaponAffinity int NOT NULL,
	WeaponSharpness varchar(20),
	WeaponElementAmount int NOT NULL,
	WeaponSlots smallint NOT NULL,
	WeaponDefense int NOT NULL,
	WeaponType varchar(20) NOT NULL,
	WeaponName varchar(20) NOT NULL
)

create table armor(
	ArmorId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	ArmorName varchar(20),
	ArmorType varchar(20),
	ArmorDefense int NOT NULL,
	ArmorFireDefense int NOT NULL,
	ArmorWaterDefense int NOT NULL,
	ArmorLightningDefense int NOT NULL,
	ArmorIceDefense int NOT NULL,
	ArmorDragonDefense int NOT NULL,
	ArmorSlots smallint NOT NULL
)

create table element(
	ElementId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	ElementName varchar(20),
)

create table items(
	ItemId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	ItemName varchar(20) NOT NULL,
	ItemZeni int NOT NULL,
	IsDrop bit NOT NULL
)

create table misions(
	MisionId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	MisionName varchar(200) NOT NULL,
	MisionDescription varchar(5000) NOT NULL,
	MisionZeni int NOT NULL,
	MisionHR int NOT NULL,
	MisionRank varchar(20) NOT NULL,
	MapId int NOT NULL,
)

create table skills(
	SkillId int NOT NULL PRIMARY KEY IDENTITY(1,1),
	SkillDescription varchar(5000) NOT NULL,
	SkillLvl int NOT NULL
)

create table monsterMision(
	MonsterId int NOT NULL,
	MisionId int NOT NULL,

	primary key(MonsterId,MisionId)
)

create table monsterElement(
	MonsterId int NOT NULL,
	ElementId int NOT NULL,

	primary key(MonsterId,ElementId)
)

create table monsterItem(
	MonsterId int NOT NULL,
	DropsId int NOT NULL,
	Quantity int NOT NULL,
	CarveCapture bit NOT NULL,
	Porcentaje int NOT NULL,
	Ranks varchar(20),

	primary key(MonsterId,DropsId)
)

create table monsterPartItem(
	MonsterId int NOT NULL,
	PartId int NOT NULL,
	ItemId int NOT NULL,
	Quantity int NOT NULL,
	Carves int NOT NULL,

	PRIMARY KEY(MonsterId,PartId,ItemId)
)

create table monsterMap(
	MonsterId int NOT NULL,
	MapId int NOT NULL,

	primary key(MonsterId,MapId)
)

create table weaponItems(
	WeaponId int NOT NULL,
	ItemId int NOT NULL,
	Quantity int NOT NULL

	primary key(ItemId,WeaponId)
)

create table armorItems(
	ArmorId int NOT NULL,
	ItemId int NOT NULL,
	Quantity int NOT NULL

	primary key(ItemId,ArmorId)
)

create table weaponSkill(
	WeaponId int NOT NULL,
	SkillId int NOT NULL,

	primary key(SkillId,WeaponId)
)

create table armorSkill(
	ArmorId int NOT NULL,
	SkillId int NOT NULL,

	primary key(SkillId,ArmorId)
)

create table weaponElement(
	WeaponId int NOT NULL,
	ElementId int NOT NULL,

	primary key(WeaponId,ElementId)
)
