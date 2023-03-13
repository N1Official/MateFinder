using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    class User
    {
        private int _id;
        private string _username;
        private string _firstName;
        private string _lastName;
        private string _email;
        private int _phone;
        private Game[] _games;
        private string _password;
        private string _country;
        private string _state;
        private string _city;
        private int _zipcode;
        private string _address;

        public int id { get => _id; set => _id = value; }
        public string username { get => _username; set => _username = value; }
        public string firstName { get => _firstName; set => _firstName = value; }
        public string lastName { get => _lastName; set => _lastName = value; }
        public string email { get => _email; set => _email = value; }
        public int phone { get => _phone; set => _phone = value; }
        public Game[] games { get => _games; set => _games = value; }
        public string password { get => _password; set => _password = value; }
        public string country { get => _country; set => _country = value; }
        public string state { get => _state; set => _state = value; }
        public string city { get => _city; set => _city = value; }
        public int zipcode { get => _zipcode; set => _zipcode = value; }
        public string address { get => _address; set => _address = value; }
    }
}
