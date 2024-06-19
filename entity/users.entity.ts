import {
  Column,
  CreateDateColumn,
  Entity,
  PrimaryGeneratedColumn,
} from "typeorm";

@Entity()
export class Users {
  @PrimaryGeneratedColumn()
  id: number;

  @Column()
  name: string;

  @Column()
  description: string;

  @Column()
  note: string;

  @CreateDateColumn()
  createdAt: String;

  @UpdateDateColumn()
  updtedAt: String;
}
