using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    class Server
    {
        private int _id;
        private string _name;
        private User[] _members;
        private string _game_category;
        private int[] _games_id;
        private string _country;
        private string _state;

        public int id { get => _id; set => _id = value; }
        public string name { get => _name; set => _name = value; }
        public string game_category { get => _game_category; set => _game_category = value; }
        public int[] games_id { get => _games_id; set => _games_id = value; }
        public string country { get => _country; set => _country = value; }
        public string state { get => _state; set => _state = value; }
        internal User[] members { get => _members; set => _members = value; }
    }
}
