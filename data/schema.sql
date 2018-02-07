CREATE TABLE 'product' (
  'product_id' int(11) NOT NULL AUTO_INCREMENT,
  'product_title' varchar(128) NOT NULL,
  'product_description' varchar(400) NOT NULL,
  'product_image' varchar(128) NOT NULL,
  'product_stock' int(11) NOT NULL,
  PRIMARY KEY ('product_id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE 'tag' (
  'tag_id' int(11) NOT NULL AUTO_INCREMENT,
  'tag_name' varchar(128) NOT NULL,
  PRIMARY KEY ('tag_id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE 'product_has_tag' (
  'product_id' int(11) DEFAULT NULL,
  'tag_id' int(11) DEFAULT NULL,
  KEY 'product_has_tag_product_id_idx' ('product_id'),
  KEY 'product_has_tag_tag_id_idx' ('tag_id'),
  CONSTRAINT 'product_has_tag_product_id' FOREIGN KEY ('product_id') REFERENCES 'product' ('product_id') ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT 'product_has_tag_tag_id' FOREIGN KEY ('tag_id') REFERENCES 'tag' ('tag_id') ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO tag (tag_name) VALUES ('T-shirt');
INSERT INTO tag (tag_name) VALUES ('Dresses');
INSERT INTO tag (tag_name) VALUES ('Jackets');
INSERT INTO tag (tag_name) VALUES ('Belts');
INSERT INTO tag (tag_name) VALUES ('Skirts');
INSERT INTO tag (tag_name) VALUES ('Coats');
INSERT INTO tag (tag_name) VALUES ('Sports clothing');
INSERT INTO tag (tag_name) VALUES ('Suits');
INSERT INTO tag (tag_name) VALUES ('Caps ');
INSERT INTO tag (tag_name) VALUES ('Shoes');
