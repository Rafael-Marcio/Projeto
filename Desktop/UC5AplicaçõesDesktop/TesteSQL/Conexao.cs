using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace TesteSQL
{
    public class Conexao
    {
        public string connectionString = null;
        public MySqlConnection connection = null;
        public string sql;
        public string server = "172.16.54.174";
        public string database = "rafael";
        public string porta = "3310";
        public string username = "root";
        public string password = "";




        public void MySQLCRUD()
        {
            connectionString = $"Server={server}; DataBase={database}; UID={username}; PWD={password}; PORT={porta}" ;
            connection = new MySqlConnection(connectionString);
        }
        
        public Boolean AbrirConexao()
        {
            try
            {

                MySQLCRUD();

                if (connection.State == ConnectionState.Closed)
                {
                    connection = new MySqlConnection(connectionString);
                    connection.Open();
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao tentar Conectar com o Banco de Dados" + ex.Message);
                return false;
            }
        }

        public void FecharConexao()
        {
            try
            {
                if(connection.State == ConnectionState.Open)
                {
                    connection = new MySqlConnection(connectionString);
                    connection.Close();
                }
            }

            catch (Exception ex)
            {
                throw ex;
            }
        }
        public DataTable GetData(string query)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = new MySqlCommand(query, connection);
                MySqlDataAdapter adapter = new MySqlDataAdapter(cmd);
                DataTable dt = new DataTable();
                adapter.Fill(dt);
                return dt;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro:  " + ex.Message);
                return null;
            }

            finally
            {
                FecharConexao();
            }
        }

        public Boolean ExecuteQuery(string query)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = new MySqlCommand(query, connection);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro:  " + ex.Message);
                return false;
            }

            finally
            {
                FecharConexao();
            }
        }

        public bool InserirConexao(string aluno, string celular, string email)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "INSERT INTO alunos(nome,email,celular) VALUES(@nome, @email, @celular)";
                cmd.Parameters.AddWithValue("@nome", aluno);
                cmd.Parameters.AddWithValue("@email", email);
                cmd.Parameters.AddWithValue("@celular", celular);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro: " + ex.Message);
                return false;
            }
            finally
            {
                FecharConexao();
            }
        }

        public bool AtualizarAluno(string aluno, string celular, string email, string idAluno)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "UPDATE alunos SET nome = @nome, email = @email, celular = @celular WHERE codigo = @idAluno";
                cmd.Parameters.AddWithValue("@nome", aluno);
                cmd.Parameters.AddWithValue("@email", email);
                cmd.Parameters.AddWithValue("@celular", celular);
                cmd.Parameters.AddWithValue("@idAluno", idAluno);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch( Exception ex)
            {
                MessageBox.Show("Erro: " + ex.Message);
                return false;
            }
            finally
            {
                FecharConexao();
            }
        }

    }
}
