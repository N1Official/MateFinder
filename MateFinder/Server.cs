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
        private int _game_id;
        private string _name;
        public int id { get => _id; set => _id = value; }
        public int games_id { get => _game_id; set => _game_id = value; }
        public string name { get => _name; set => _name = value; }
    }
}
